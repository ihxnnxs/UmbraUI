<!--
tags: [shape, point, check]
version: "1.26"
unicode: "ed28"
category: Shapes
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
  <path d="M7.5 4.21l0 .01" />
  <path d="M4.21 7.5l0 .01" />
  <path d="M3 12l0 .01" />
  <path d="M4.21 16.5l0 .01" />
  <path d="M7.5 19.79l0 .01" />
  <path d="M12 21l0 .01" />
  <path d="M16.5 19.79l0 .01" />
  <path d="M19.79 16.5l0 .01" />
  <path d="M21 12l0 .01" />
  <path d="M19.79 7.5l0 .01" />
  <path d="M16.5 4.21l0 .01" />
  <path d="M12 3l0 .01" />
</svg>
