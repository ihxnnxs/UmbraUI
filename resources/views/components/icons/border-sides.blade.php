<!--
tags: [edges, flanks, limits, boundaries, perimeter, frames, boundary, outlines, borders, contours]
category: Design
version: "2.6"
unicode: "f7a1"
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
  <path d="M4 8v8" />
  <path d="M20 16v-8" />
  <path d="M8 4h8" />
  <path d="M8 20h8" />
</svg>
