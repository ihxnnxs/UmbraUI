<!--
tags: [direction, north, south]
category: Arrows
version: "1.37"
unicode: "eddf"
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
  <path d="M14 21l-11 -11" />
  <path d="M3 14v-4h4" />
  <path d="M17 14h4v-4" />
  <path d="M10 3l11 11" />
</svg>
