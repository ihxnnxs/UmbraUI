<!--
category: System
tags: [product, shop, scan, supermarket]
version: "1.62"
unicode: "f0b3"
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
  <path d="M4 7v-1c0 -.552 .224 -1.052 .586 -1.414" />
  <path d="M4 17v1a2 2 0 0 0 2 2h2" />
  <path d="M16 4h2a2 2 0 0 1 2 2v1" />
  <path d="M16 20h2c.551 0 1.05 -.223 1.412 -.584" />
  <path d="M5 11h1v2h-1z" />
  <path d="M10 11v2" />
  <path d="M15 11v.01" />
  <path d="M19 11v2" />
  <path d="M3 3l18 18" />
</svg>
