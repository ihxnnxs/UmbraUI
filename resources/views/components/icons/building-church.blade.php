<!--
tags: [religion, chapel, sanctuary, temple, cathedral, pray, prayer]
category: Buildings
version: "1.1"
unicode: "ea4c"
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
  <path d="M3 21l18 0" />
  <path d="M10 21v-4a2 2 0 0 1 4 0v4" />
  <path d="M10 5l4 0" />
  <path d="M12 3l0 5" />
  <path d="M6 21v-7m-2 2l8 -8l8 8m-2 -2v7" />
</svg>
