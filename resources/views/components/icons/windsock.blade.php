<!--
tags: [weather, meteorology, windy, storm, wind]
version: "1.58"
unicode: "f06d"
category: Map
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
  <path d="M6 3v18" />
  <path d="M6 11l12 -1v-4l-12 -1" />
  <path d="M10 5.5v5" />
  <path d="M14 6v4" />
  <path d="M4 21h4" />
</svg>
