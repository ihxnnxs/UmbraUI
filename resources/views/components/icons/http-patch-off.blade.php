<!--
category: Computers
tags: [update, modify, fix, edit, network, disable, halt, adjust, down, alter]
unicode: "100e2"
version: "3.26"
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
  <path d="M3 12h2a2 2 0 1 0 0 -4h-2v8" />
  <path d="M10 16v-6m2 -2a2 2 0 0 1 2 2m0 4v2" />
  <path d="M10 13h3" />
  <path d="M17 8h4" />
  <path d="M19 8v7" />
  <path d="M3 3l18 18" />
</svg>
