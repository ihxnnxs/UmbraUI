<!--
tags: [path, direction, track, find, gps, map, navigate, explore, trace, survey]
version: "2.37"
unicode: "fcbf"
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
  <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
  <path d="M4 16v2a2 2 0 0 0 2 2h2" />
  <path d="M16 4h2a2 2 0 0 1 2 2v2" />
  <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
  <path d="M7 12v-3h3" />
  <path d="M14 9h3v3" />
  <path d="M7 9l4.414 4.414a2 2 0 0 1 .586 1.414v2.172" />
  <path d="M17 9l-4.414 4.414a2 2 0 0 0 -.586 1.414v2.172" />
</svg>
