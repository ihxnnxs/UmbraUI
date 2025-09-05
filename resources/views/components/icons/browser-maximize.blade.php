<!--
tags: [expand, enlarge, fullscreen, zoom, enhance, magnify, increase, amplify, widen, stretch]
unicode: "100b0"
version: "3.23"
category: Devices
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
  <path d="M4 8h8" />
  <path d="M20 11.5v6.5a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h6.5" />
  <path d="M8 4v4" />
  <path d="M16 8l5 -5" />
  <path d="M21 7.5v-4.5h-4.5" />
</svg>
