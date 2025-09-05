<!--
tags: [maths, dimensions, size, width, length, geometry, measure, technical]
version: "1.1"
unicode: "eb1a"
category: Design
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
  <path d="M5 4h14a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-7a1 1 0 0 0 -1 1v7a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1" />
  <path d="M4 8l2 0" />
  <path d="M4 12l3 0" />
  <path d="M4 16l2 0" />
  <path d="M8 4l0 2" />
  <path d="M12 4l0 3" />
  <path d="M16 4l0 2" />
</svg>
