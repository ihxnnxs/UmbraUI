<!--
tags: [culture, religion, philosophy, tradition]
category: Symbols
unicode: "f58a"
version: "1.109"
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
  <path d="M9 19l3 2v-18" />
  <path d="M4 10l8 -2" />
  <path d="M4 18l8 -10" />
  <path d="M20 18l-8 -8l8 -4" />
</svg>
