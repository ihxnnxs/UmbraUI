<!--
tags: [image, capture, photo]
version: "1.70"
unicode: "f201"
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
  <path d="M7 19a2 2 0 0 1 -2 -2" />
  <path d="M5 13v-2" />
  <path d="M5 7a2 2 0 0 1 2 -2" />
  <path d="M11 5h2" />
  <path d="M17 5a2 2 0 0 1 2 2" />
  <path d="M19 11v2" />
  <path d="M19 17v4" />
  <path d="M21 19h-4" />
  <path d="M13 19h-2" />
</svg>
