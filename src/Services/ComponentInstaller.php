<?php

namespace Ihxnnxs\UmbraUI\Services;

use Illuminate\Support\Facades\File;

/**
 * ComponentInstaller - Handles component installation
 *
 * Copies component files from registry to user's project.
 */
class ComponentInstaller
{
    protected string $targetPath;

    protected bool $overwrite;

    public function __construct(string $targetPath, bool $overwrite = false)
    {
        $this->targetPath = $targetPath;
        $this->overwrite = $overwrite;
    }

    /**
     * Install a component to the target directory
     *
     * @param  array  $component  Component definition from registry
     * @return array Array of installed file paths
     */
    public function install(array $component): array
    {
        $installedFiles = [];

        foreach ($component['files'] as $file) {
            $destination = $this->targetPath.'/'.$file['path'];

            // Check if file already exists
            if (File::exists($destination) && ! $this->overwrite) {
                throw new \RuntimeException("File already exists: {$destination}. Use --overwrite to replace.");
            }

            // Create directory if it doesn't exist
            $directory = dirname($destination);
            if (! File::isDirectory($directory)) {
                File::makeDirectory($directory, 0755, true);
            }

            // Write file content
            $content = $file['content'] ?? '';
            File::put($destination, $content);

            $installedFiles[] = $destination;
        }

        return $installedFiles;
    }

    /**
     * Check if component files already exist
     *
     * @param  array  $component  Component definition
     * @return array Array of existing file paths
     */
    public function checkExisting(array $component): array
    {
        $existing = [];

        foreach ($component['files'] as $file) {
            $destination = $this->targetPath.'/'.$file['path'];

            if (File::exists($destination)) {
                $existing[] = $destination;
            }
        }

        return $existing;
    }

    /**
     * Copy files from source to destination
     *
     * @param  array  $files  Array of file definitions
     * @param  string  $destination  Destination directory
     * @return array Array of copied file paths
     */
    public function copyFiles(array $files, string $destination): array
    {
        $copiedFiles = [];

        foreach ($files as $file) {
            $targetPath = $destination.'/'.$file['path'];
            $directory = dirname($targetPath);

            if (! File::isDirectory($directory)) {
                File::makeDirectory($directory, 0755, true);
            }

            $content = $file['content'] ?? '';
            File::put($targetPath, $content);

            $copiedFiles[] = $targetPath;
        }

        return $copiedFiles;
    }
}
