<!--
tags: [layout, pattern, matrix, arrangement, gridlines, cell, structure, block, squares, grid-pattern]
category: Design
version: "2.36"
unicode: "fca4"
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
  <path d="M3 8h18" />
  <path d="M3 16h18" />
  <path d="M8 3v18" />
  <path d="M16 3v18" />
</svg>
