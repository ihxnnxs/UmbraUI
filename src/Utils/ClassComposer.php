<?php

namespace Ihxnnxs\UmbraUI\Utils;

/**
 * ClassComposer - PHP equivalent of cn() from shadcn/ui
 *
 * Merges and deduplicates Tailwind CSS classes intelligently.
 * Handles conflicts where later classes override earlier ones.
 *
 * @example
 * ClassComposer::cn('px-4 py-2', 'px-6') // Returns: 'py-2 px-6'
 * ClassComposer::cn('text-red-500', false && 'text-blue-500') // Returns: 'text-red-500'
 * ClassComposer::cn(['base-class', 'conditional' => true]) // Returns: 'base-class conditional'
 */
class ClassComposer
{
    /**
     * Merge and deduplicate CSS classes
     *
     * @param  mixed  ...$inputs  Variable number of class inputs (strings, arrays, or conditional values)
     * @return string Merged class string
     */
    public static function cn(...$inputs): string
    {
        $classes = [];

        foreach ($inputs as $input) {
            if (is_string($input)) {
                $classes[] = $input;
            } elseif (is_array($input)) {
                foreach ($input as $key => $value) {
                    if (is_int($key) && $value) {
                        // Numeric key: ['class-name']
                        $classes[] = $value;
                    } elseif ($value) {
                        // Associative key: ['class-name' => true]
                        $classes[] = $key;
                    }
                }
            } elseif ($input) {
                // Convert truthy non-string values to string
                $classes[] = (string) $input;
            }
        }

        // Flatten into single string and split into individual classes
        $classString = implode(' ', $classes);
        $classArray = preg_split('/\s+/', $classString, -1, PREG_SPLIT_NO_EMPTY);

        if (empty($classArray)) {
            return '';
        }

        // Resolve Tailwind conflicts (last class wins)
        $resolved = self::resolveTailwindConflicts($classArray);

        return implode(' ', $resolved);
    }

    /**
     * Resolve Tailwind CSS class conflicts
     *
     * When multiple classes of the same utility type are present,
     * keep only the last occurrence (Tailwind-merge behavior).
     *
     * @param  array  $classes  Array of CSS class names
     * @return array Resolved class array
     */
    private static function resolveTailwindConflicts(array $classes): array
    {
        // Group classes by their utility prefix
        $groups = [];
        $order = []; // Track original order

        foreach ($classes as $class) {
            $prefix = self::extractTailwindPrefix($class);

            // Store the class, overwriting previous ones with same prefix
            $groups[$prefix] = $class;

            // Track order of first appearance
            if (! isset($order[$prefix])) {
                $order[$prefix] = count($order);
            }
        }

        // Sort by original order and return values
        uksort($groups, function ($a, $b) use ($order) {
            return $order[$a] <=> $order[$b];
        });

        return array_values($groups);
    }

    /**
     * Extract Tailwind utility prefix from a class name
     *
     * Handles:
     * - Simple utilities: 'p-4' -> 'p'
     * - Responsive: 'md:p-4' -> 'md:p'
     * - Pseudo-classes: 'hover:bg-blue-500' -> 'hover:bg'
     * - Arbitrary values: 'p-[10px]' -> 'p'
     * - Negative values: '-m-4' -> 'm'
     *
     * @param  string  $class  CSS class name
     * @return string Utility prefix
     */
    private static function extractTailwindPrefix(string $class): string
    {
        // Remove variant prefixes (hover:, focus:, md:, etc.)
        $parts = explode(':', $class);
        $baseClass = end($parts);

        // Handle negative values
        $baseClass = ltrim($baseClass, '-');

        // Extract the utility prefix (first part before dash or bracket)
        if (preg_match('/^([a-z]+)(?:-|$|\[)/', $baseClass, $matches)) {
            $utilityPrefix = $matches[1];

            // Reconstruct full prefix including variants
            if (count($parts) > 1) {
                array_pop($parts); // Remove base class
                $variants = implode(':', $parts);

                return $variants.':'.$utilityPrefix;
            }

            return $utilityPrefix;
        }

        // Fallback: use the entire class as prefix (no conflict resolution)
        return $class;
    }
}
