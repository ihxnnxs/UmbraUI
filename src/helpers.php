<?php

use Ihxnnxs\UmbraUI\Utils\ClassComposer;

if (! function_exists('cn')) {
    /**
     * Merge and deduplicate Tailwind CSS classes
     *
     * @param  mixed  ...$inputs  Variable number of class inputs
     * @return string Merged class string
     */
    function cn(...$inputs): string
    {
        return ClassComposer::cn(...$inputs);
    }
}
