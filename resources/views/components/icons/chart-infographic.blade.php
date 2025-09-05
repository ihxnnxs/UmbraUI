<!--
tags: [statistics, data, value, variable, scale, statistical, bar, information, report]
category: Charts
version: "1.39"
unicode: "ee30"
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
  <path d="M7 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
  <path d="M7 3v4h4" />
  <path d="M9 17l0 4" />
  <path d="M17 14l0 7" />
  <path d="M13 13l0 8" />
  <path d="M21 12l0 9" />
</svg>
