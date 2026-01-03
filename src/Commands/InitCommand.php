<?php

namespace Ihxnnxs\UmbraUI\Commands;

use Ihxnnxs\UmbraUI\Services\ColorSchemeService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InitCommand extends Command
{
    public $signature = 'umbra:init
        {--force : Override existing configuration}
        {--base-color= : Base color scheme (neutral, stone, zinc, gray)}
        {--dev : Development mode (use workbench paths)}';

    public $description = 'Initialize UmbraUI in your project';

    protected string $baseColor;

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
        $this->info('Initializing UmbraUI...');

        // Check if already initialized
        $componentsJsonPath = base_path('components.json');
        if (File::exists($componentsJsonPath) && ! $this->option('force')) {
            $this->error('Project already initialized. Use --force to reinitialize.');

            return self::FAILURE;
        }

        // Get base color selection
        $this->baseColor = $this->selectBaseColor();

        // Create components.json
        $this->createComponentsJson();

        // Create component directory
        $this->createComponentDirectory();

        // Update CSS with theme variables
        $this->updateAppCss();

        // Show success message and next steps
        $this->displaySuccess();

        return self::SUCCESS;
    }

    protected function selectBaseColor(): string
    {
        // If base-color option provided, validate it
        if ($baseColor = $this->option('base-color')) {
            $schemes = ColorSchemeService::getAvailableSchemes();
            if (! in_array($baseColor, $schemes)) {
                $this->error("Invalid base color: {$baseColor}");
                $this->line('Available options: '.implode(', ', $schemes));
                exit(self::FAILURE);
            }

            return $baseColor;
        }

        // Get current theme from components.json if exists
        $currentTheme = null;
        $componentsJsonPath = base_path('components.json');
        if (File::exists($componentsJsonPath)) {
            $config = json_decode(File::get($componentsJsonPath), true);
            $currentTheme = $config['tailwind']['baseColor'] ?? null;
        }

        // Interactive selection
        $schemes = ColorSchemeService::getAvailableSchemes();
        $defaultIndex = $currentTheme ? array_search($currentTheme, $schemes) : 0;

        $prompt = $currentTheme
            ? "Which base color would you like to use? [current: {$currentTheme}]"
            : 'Which base color would you like to use?';

        $choice = $this->choice(
            $prompt,
            $schemes,
            $defaultIndex !== false ? $defaultIndex : 0
        );

        return $choice;
    }

    protected function createComponentsJson(): void
    {
        $this->info('Creating components.json...');

        $config = [
            '$schema' => 'https://umbraui.com/schema.json',
            'style' => 'default',
            'tailwind' => [
                'config' => 'tailwind.config.js',
                'css' => 'resources/css/app.css',
                'baseColor' => $this->baseColor,
                'cssVariables' => true,
            ],
            'aliases' => [
                'components' => 'resources/views/components',
                'umbra' => 'resources/views/components/umbra',
            ],
        ];

        File::put(base_path('components.json'), json_encode($config, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        $this->line("✓ Created components.json (base color: {$this->baseColor})");
    }

    protected function createComponentDirectory(): void
    {
        $this->info('Creating component directory...');

        if ($this->option('dev')) {
            // Development mode - use package workbench
            $componentPath = $this->packagePath('workbench/resources/views/components/umbra');
        } else {
            // Production mode - use standard Laravel paths
            $componentPath = resource_path('views/components/umbra');
        }

        if (! File::isDirectory($componentPath)) {
            File::makeDirectory($componentPath, 0755, true);
            $this->line('✓ Created '.$componentPath);
        } else {
            $this->line('✓ Directory already exists: '.$componentPath);
        }
    }

    protected function updateAppCss(): void
    {
        $this->info('Setting up theme...');

        $appCssContent = $this->generateAppCss();

        if ($this->option('dev')) {
            // Development mode - update package workbench and stub
            $stubPath = $this->packagePath('resources/stubs/app.css.stub');
            $stubDir = dirname($stubPath);
            if (! File::isDirectory($stubDir)) {
                File::makeDirectory($stubDir, 0755, true);
            }
            File::put($stubPath, $appCssContent);
            $this->line("✓ Updated app.css.stub with {$this->baseColor} theme");

            $workbenchCssPath = $this->packagePath('workbench/resources/css/app.css');
            $workbenchCssDir = dirname($workbenchCssPath);
            if (! File::isDirectory($workbenchCssDir)) {
                File::makeDirectory($workbenchCssDir, 0755, true);
            }
            File::put($workbenchCssPath, $appCssContent);
            $this->line('✓ Updated workbench/resources/css/app.css');
        } else {
            // Production mode - update user's app.css
            $appCssPath = resource_path('css/app.css');
            $cssDir = dirname($appCssPath);

            if (File::exists($appCssPath)) {
                if ($this->option('force') || $this->confirm("Update app.css with {$this->baseColor} theme?", true)) {
                    File::put($appCssPath, $appCssContent);
                    $this->line("✓ Updated app.css with {$this->baseColor} theme");
                }
            } else {
                // Create new app.css
                if (! File::isDirectory($cssDir)) {
                    File::makeDirectory($cssDir, 0755, true);
                }
                File::put($appCssPath, $appCssContent);
                $this->line("✓ Created app.css with {$this->baseColor} theme");
            }
        }
    }

    protected function generateAppCss(): string
    {
        $themeVariables = ColorSchemeService::getSchemeVariables($this->baseColor);

        return <<<CSS
@import "tailwindcss";

@custom-variant dark (&:is(.dark *));

@theme inline {
  --radius-sm: calc(var(--radius) - 4px);
  --radius-md: calc(var(--radius) - 2px);
  --radius-lg: var(--radius);
  --radius-xl: calc(var(--radius) + 4px);
  --color-background: var(--background);
  --color-foreground: var(--foreground);
  --color-card: var(--card);
  --color-card-foreground: var(--card-foreground);
  --color-popover: var(--popover);
  --color-popover-foreground: var(--popover-foreground);
  --color-primary: var(--primary);
  --color-primary-foreground: var(--primary-foreground);
  --color-secondary: var(--secondary);
  --color-secondary-foreground: var(--secondary-foreground);
  --color-muted: var(--muted);
  --color-muted-foreground: var(--muted-foreground);
  --color-accent: var(--accent);
  --color-accent-foreground: var(--accent-foreground);
  --color-destructive: var(--destructive);
  --color-destructive-foreground: var(--destructive-foreground);
  --color-border: var(--border);
  --color-input: var(--input);
  --color-ring: var(--ring);
  --color-chart-1: var(--chart-1);
  --color-chart-2: var(--chart-2);
  --color-chart-3: var(--chart-3);
  --color-chart-4: var(--chart-4);
  --color-chart-5: var(--chart-5);
}

{$themeVariables}

@layer base {
  * {
    @apply border-border outline-ring/50;
  }
  body {
    @apply bg-background text-foreground;
  }
}

CSS;
    }

    protected function displaySuccess(): void
    {
        $this->newLine();
        $this->info('Success! UmbraUI has been initialized.');
        $this->newLine();

        $this->comment('Next steps:');
        $this->line('1. Add components:');
        $this->line('   php artisan umbra:add button');
        $this->newLine();
        $this->line('2. Start using components:');
        $this->line('   <x-umbra.button>Click me</x-umbra.button>');
        $this->newLine();
    }
}
