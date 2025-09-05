<!--
tags: [shape, direction, west]
category: Arrows
unicode: "f643"
version: "1.118"
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
  <path d="M15 15l-3 -3l3 -3" />
  <path d="M11 15l-3 -3l3 -3" />
  <path d="M21 12a9 9 0 1 0 0 .265l0 -.265z" />
</svg>
