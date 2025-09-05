<!--
tags: [mathematic, expression, equation]
category: Math
unicode: "f4f1"
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
  <path d="M9 3l6 6" />
  <path d="M9 9l6 -6" />
  <path d="M9 15l3 4.5" />
  <path d="M15 15l-4.5 7" />
  <path d="M5 12h14" />
</svg>
