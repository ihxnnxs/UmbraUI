<!--
tags: [width, height, size, breadth, depth]
category: Design
version: "1.39"
unicode: "ee7b"
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
  <path d="M3 5h11" />
  <path d="M12 7l2 -2l-2 -2" />
  <path d="M5 3l-2 2l2 2" />
  <path d="M19 10v11" />
  <path d="M17 19l2 2l2 -2" />
  <path d="M21 12l-2 -2l-2 2" />
  <path d="M3 10m0 2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v7a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2z" />
</svg>
