<!--
tags: [direction, north, top]
category: Arrows
version: "1.82"
unicode: "f2cd"
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
  <path d="M7 21v-6" />
  <path d="M20 6l-3 -3l-3 3" />
  <path d="M17 3v18" />
  <path d="M10 18l-3 3l-3 -3" />
  <path d="M7 3v2" />
  <path d="M7 9v2" />
</svg>
