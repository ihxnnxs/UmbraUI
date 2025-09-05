<!--
tags: [arrow, point, below, bottom]
category: Arrows
version: "1.39"
unicode: "ee4c"
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
  <path d="M5 4h6a3 3 0 0 1 3 3v7" />
  <path d="M10 10l4 4l4 -4m-8 5l4 4l4 -4" />
</svg>
