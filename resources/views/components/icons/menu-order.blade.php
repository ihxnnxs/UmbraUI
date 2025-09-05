<!--
tags: [move, arrows, up, down, south, north, bottom, top]
category: System
unicode: "f5f5"
version: "1.113"
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
  <path d="M4 10h16" />
  <path d="M4 14h16" />
  <path d="M9 18l3 3l3 -3" />
  <path d="M9 6l3 -3l3 3" />
</svg>
