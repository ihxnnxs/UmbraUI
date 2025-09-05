<!--
tags: [arrange, data, level, layout, arrow]
category: Design
version: "1.73"
unicode: "f235"
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
  <path d="M6 10l-2 1l8 4l8 -4l-2 -1" />
  <path d="M4 15l8 4l8 -4" />
  <path d="M12 4v7" />
  <path d="M15 8l-3 3l-3 -3" />
</svg>
