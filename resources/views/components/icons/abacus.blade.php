<!--
tags: [abacus, math, counting, adding up]
version: "1.58"
category: Math
unicode: "f05c"
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
  <path d="M5 3v18" />
  <path d="M19 21v-18" />
  <path d="M5 7h14" />
  <path d="M5 15h14" />
  <path d="M8 13v4" />
  <path d="M11 13v4" />
  <path d="M16 13v4" />
  <path d="M14 5v4" />
  <path d="M11 5v4" />
  <path d="M8 5v4" />
  <path d="M3 21h18" />
</svg>
