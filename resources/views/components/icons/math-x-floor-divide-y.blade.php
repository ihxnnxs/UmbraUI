<!--
tags: [math, expression, equation, floor, division]
category: Math
unicode: "10073"
version: "3.20"
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
  <path d="M1.5 19l18 -18" />
  <path d="M4.5 22l18 -18" />
  <path d="M18 15l3 4" />
  <path d="M23 15l-4.5 8" />
  <path d="M1 1l6 6" />
  <path d="M1 7l6 -6" />
</svg>
