<!--
tags: [wind, rotate, storm, spin, spinning, air, catastrophe, vortex]
category: Weather
version: "1.20"
unicode: "ece2"
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
  <path d="M21 4l-18 0" />
  <path d="M13 16l-6 0" />
  <path d="M11 20l4 0" />
  <path d="M6 8l14 0" />
  <path d="M4 12l12 0" />
</svg>
