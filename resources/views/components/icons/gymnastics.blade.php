<!--
tags: [exercise, flexible, balance, strength, acrobatics, sport, routine, fitness, stretch, performance]
version: "2.42"
unicode: "fd44"
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
  <path d="M7 7a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
  <path d="M13 21l1 -9l7 -6" />
  <path d="M3 11h6l5 1" />
  <path d="M11.5 8.5l4.5 -3.5" />
</svg>
