<!--
tags: [arrow, next, above, forward, point]
category: Arrows
version: "1.39"
unicode: "ee4f"
-->
@php
    $hasCustomColor = str_contains($attributes->get('class', ''), 'text-');
@endphp

<svg {{ $attributes->merge([
    "xmlns" => "http://www.w3.org/2000/svg",
    "width" => "24",
    "height" => "24",
    "viewBox" => "0 0 24 24",
    "fill" => "none",
    "stroke" => "currentColor",
    "stroke-width" => "1.5",
    "stroke-linecap" => "round",
    "stroke-linejoin" => "round",
])->class([
    'w-6 h-6',
    'text-neutral-900 dark:text-neutral-100' => !$hasCustomColor
]) }}>
  <path d="M4 18v-6a3 3 0 0 1 3 -3h7" />
  <path d="M10 13l4 -4l-4 -4m5 8l4 -4l-4 -4" />
</svg>
