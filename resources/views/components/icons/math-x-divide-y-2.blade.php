<!--
category: Math
tags: [mathematic, expression, equation]
unicode: "f4f0"
version: "1.100"
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
  <path d="M3 21l18 -18" />
  <path d="M15 14l3 4.5" />
  <path d="M21 14l-4.5 7" />
  <path d="M3 4l6 6" />
  <path d="M3 10l6 -6" />
</svg>
