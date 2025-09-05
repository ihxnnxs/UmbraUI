<!--
tags: [math, sign, adding, equation]
category: Math
version: "2.6"
unicode: "f7ad"
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
  <path d="M4 7h6" />
  <path d="M7 4v6" />
  <path d="M20 16h-6" />
  <path d="M20 19h-6" />
  <path d="M5 19l14 -14" />
</svg>
