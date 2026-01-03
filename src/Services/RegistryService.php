<?php

namespace Ihxnnxs\UmbraUI\Services;

use Illuminate\Support\Facades\File;

/**
 * RegistryService - Manages component registry
 *
 * Handles loading and querying component metadata from the registry.
 */
class RegistryService
{
    protected string $registryPath;

    public function __construct(?string $registryPath = null)
    {
        $this->registryPath = $registryPath ?? __DIR__.'/../../registry';
    }

    /**
     * Get component definition by name
     *
     * @param  string  $name  Component name (e.g., 'button')
     * @return array|null Component definition or null if not found
     */
    public function getComponent(string $name): ?array
    {
        $componentPath = $this->registryPath.'/ui/'.$name.'.json';

        if (! File::exists($componentPath)) {
            return null;
        }

        $content = File::get($componentPath);
        $component = json_decode($content, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException("Invalid JSON in component file: {$componentPath}");
        }

        // Load the actual Blade file content
        $bladeFile = $this->registryPath.'/ui/'.$name.'.blade.php';
        if (File::exists($bladeFile)) {
            $component['files'][0]['content'] = File::get($bladeFile);
        }

        return $component;
    }

    /**
     * Get all available components
     *
     * @return array List of all component names
     */
    public function getAllComponents(): array
    {
        $indexPath = $this->registryPath.'/index.json';

        if (! File::exists($indexPath)) {
            return $this->scanComponentsDirectory();
        }

        $content = File::get($indexPath);
        $index = json_decode($content, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->scanComponentsDirectory();
        }

        return $index['components'] ?? [];
    }

    /**
     * Scan components directory for JSON files
     *
     * @return array List of component names
     */
    protected function scanComponentsDirectory(): array
    {
        $componentDir = $this->registryPath.'/ui';

        if (! File::isDirectory($componentDir)) {
            return [];
        }

        $files = File::glob($componentDir.'/*.json');
        $components = [];

        foreach ($files as $file) {
            $name = basename($file, '.json');
            $components[] = $name;
        }

        return $components;
    }

    /**
     * Check if component exists in registry
     *
     * @param  string  $name  Component name
     */
    public function has(string $name): bool
    {
        return File::exists($this->registryPath.'/ui/'.$name.'.json');
    }
}
