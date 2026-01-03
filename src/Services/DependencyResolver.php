<?php

namespace Ihxnnxs\UmbraUI\Services;

/**
 * DependencyResolver - Resolves component dependencies
 *
 * Handles dependency tree resolution for components that depend on other components.
 */
class DependencyResolver
{
    protected RegistryService $registry;

    public function __construct(RegistryService $registry)
    {
        $this->registry = $registry;
    }

    /**
     * Resolve full dependency tree for a component
     *
     * @param  string  $componentName  Component name
     * @return array Array of component definitions in install order
     */
    public function resolveTree(string $componentName): array
    {
        $tree = [];
        $queue = [$componentName];
        $visited = [];

        while (! empty($queue)) {
            $current = array_shift($queue);

            if (in_array($current, $visited)) {
                continue;
            }

            $visited[] = $current;
            $component = $this->registry->getComponent($current);

            if (! $component) {
                throw new \RuntimeException("Component not found in registry: {$current}");
            }

            // Add dependencies to queue first (so they get installed first)
            $registryDependencies = $component['registryDependencies'] ?? [];
            foreach ($registryDependencies as $dependency) {
                if (! in_array($dependency, $visited)) {
                    array_unshift($queue, $dependency);
                }
            }

            // Add current component to tree
            $tree[] = $component;
        }

        // Reverse so dependencies are installed before dependents
        return array_reverse($tree);
    }

    /**
     * Check for conflicting components
     *
     * @param  array  $components  Array of component names
     * @return array Array of conflicts (empty if none)
     */
    public function checkConflicts(array $components): array
    {
        // For now, no conflicts - components can coexist
        // Future: check for incompatible versions, etc.
        return [];
    }

    /**
     * Get all dependencies for a component (flat list)
     *
     * @param  string  $componentName  Component name
     * @return array Array of dependency names
     */
    public function getDependencies(string $componentName): array
    {
        $component = $this->registry->getComponent($componentName);

        if (! $component) {
            return [];
        }

        $dependencies = $component['registryDependencies'] ?? [];
        $allDependencies = $dependencies;

        // Recursively get dependencies of dependencies
        foreach ($dependencies as $dependency) {
            $nestedDeps = $this->getDependencies($dependency);
            $allDependencies = array_merge($allDependencies, $nestedDeps);
        }

        return array_unique($allDependencies);
    }
}
