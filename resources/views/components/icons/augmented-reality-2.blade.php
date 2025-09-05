<!--
category: System
tags: [technology, dimensional, geometry]
unicode: "f37e"
version: "1.91"
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
  <path d="M10 21h-2a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v3.5" />
  <path d="M17 17l-4 -2.5l4 -2.5l4 2.5v4.5l-4 2.5z" />
  <path d="M13 14.5v4.5l4 2.5" />
  <path d="M17 17l4 -2.5" />
  <path d="M11 4h2" />
</svg>
