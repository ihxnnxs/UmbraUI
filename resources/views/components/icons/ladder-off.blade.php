<!--
tags: [up, equipment, garden, climb, climbing]
version: "1.66"
unicode: "f14c"
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
  <path d="M8 3v1m0 4v13" />
  <path d="M16 3v9m0 4v5" />
  <path d="M8 14h6" />
  <path d="M8 10h2m4 0h2" />
  <path d="M10 6h6" />
  <path d="M8 18h8" />
  <path d="M3 3l18 18" />
</svg>
