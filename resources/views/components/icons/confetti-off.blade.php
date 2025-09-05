<!--
tags: [party, celebrate, streamers, paper, parade, wedding, celebration]
unicode: "f3d9"
version: "1.94"
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
  <path d="M4 5h1" />
  <path d="M5 5v1" />
  <path d="M11.5 4l-.5 2" />
  <path d="M18 5h2" />
  <path d="M19 4v2" />
  <path d="M15 9l-1 1" />
  <path d="M18 13l2 -.5" />
  <path d="M18 19h1" />
  <path d="M19 19v1" />
  <path d="M14 16.518l-6.518 -6.518l-4.39 9.58a1 1 0 0 0 1.329 1.329l9.579 -4.39v0z" />
  <path d="M3 3l18 18" />
</svg>
