<!--
tags: [rectangle, side, east]
category: Design
version: "1.80"
unicode: "f2aa"
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
  <path d="M13.998 20.003v-16h5a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-5z" />
  <path d="M8.998 20.003h.01" />
  <path d="M3.997 20.003h.011" />
  <path d="M3.997 15.002h.011" />
  <path d="M3.997 9.002h.011" />
  <path d="M3.997 4.002h.011" />
  <path d="M8.998 4.002h.01" />
</svg>
