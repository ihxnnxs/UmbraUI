<!--
category: Map
tags: [flag, ship, sports, championship, mark, spot, winner]
version: "1.66"
unicode: "f174"
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
  <path d="M8 21h4" />
  <path d="M10 21v-11m0 -4v-3" />
  <path d="M10 4l9 4l-4.858 2.16m-2.764 1.227l-1.378 .613" />
  <path d="M3 3l18 18" />
</svg>
