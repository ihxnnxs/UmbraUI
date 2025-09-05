<!--
tags: [count, calculate, math]
category: Math
version: "1.42"
unicode: "ef41"
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
  <path d="M8 16h2a2 2 0 1 0 0 -4h-2v-4h4" />
  <path d="M5 16v.01" />
  <path d="M15 16l4 -4" />
  <path d="M19 16l-4 -4" />
</svg>
