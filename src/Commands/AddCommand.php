<?php

namespace Ihxnnxs\UmbraUI\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Ihxnnxs\UmbraUI\Services\ComponentInstaller;
use Ihxnnxs\UmbraUI\Services\DependencyResolver;
use Ihxnnxs\UmbraUI\Services\RegistryService;

class AddCommand extends Command
{
    public $signature = 'umbra:add
        {components* : Component names to add}
        {--all : Add all components}
        {--overwrite : Overwrite existing components}
        {--dev : Development mode (use workbench paths)}';

    public $description = 'Add components to your project';

    protected RegistryService $registry;

    protected DependencyResolver $resolver;

    /**
     * Get package root path (works in both testbench and production)
     */
    protected function packagePath(string $path = ''): string
    {
        $packageRoot = dirname(__DIR__, 2);
        return $path ? $packageRoot.'/'.$path : $packageRoot;
    }

    public function handle(): int
    {
        // Initialize services
        $this->registry = new RegistryService;
        $this->resolver = new DependencyResolver($this->registry);

        // Check if project is initialized
        if (! $this->isInitialized()) {
            $this->error('Project not initialized. Run: php artisan umbra:init');

            return self::FAILURE;
        }

        // Get component names
        $components = $this->getComponentsToInstall();

        if (empty($components)) {
            $this->error('No components specified.');

            return self::FAILURE;
        }

        // Install each component
        $this->info('Installing components...');

        foreach ($components as $componentName) {
            $this->installComponent($componentName);
        }

        $this->newLine();
        $this->info('✨ Components installed successfully!');

        return self::SUCCESS;
    }

    protected function isInitialized(): bool
    {
        return File::exists(base_path('components.json'));
    }

    protected function getComponentsToInstall(): array
    {
        if ($this->option('all')) {
            return $this->registry->getAllComponents();
        }

        return $this->argument('components');
    }

    protected function installComponent(string $componentName): void
    {
        $this->line("→ {$componentName}");

        // Get component from registry
        $component = $this->registry->getComponent($componentName);

        if (! $component) {
            $this->error("  ✗ Component not found in registry: {$componentName}");

            return;
        }

        // Resolve dependencies
        $tree = $this->resolver->resolveTree($componentName);

        // Get target path based on mode
        if ($this->option('dev')) {
            // Development mode - use package workbench
            $targetPath = $this->packagePath('workbench/resources/views/components/umbra');
        } else {
            // Production mode - use config or default
            $config = $this->getConfig();
            $targetPath = base_path($config['aliases']['umbra'] ?? 'resources/views/components/umbra');
        }

        // Install all components in dependency order
        $installer = new ComponentInstaller($targetPath, $this->option('overwrite'));

        foreach ($tree as $comp) {
            try {
                $files = $installer->install($comp);

                foreach ($files as $file) {
                    $relativePath = str_replace(base_path().'/', '', $file);
                    $this->line("  ✓ {$relativePath}");
                }
            } catch (\Exception $e) {
                $this->error("  ✗ {$e->getMessage()}");
            }
        }
    }

    protected function getConfig(): array
    {
        $path = base_path('components.json');

        if (! File::exists($path)) {
            return [];
        }

        $content = File::get($path);

        return json_decode($content, true) ?? [];
    }
}
