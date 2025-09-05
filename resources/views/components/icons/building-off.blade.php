<!--
category: Buildings
tags: [flat, office, city, urban, scyscraper, architecture, construction]
unicode: "fefd"
version: "3.6"
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
  <path d="M3 21h18" />
  <path d="M9 12h1" />
  <path d="M9 16h1" />
  <path d="M14 8h1" />
  <path d="M14 16h1" />
  <path d="M5 21v-16" />
  <path d="M7 3h10c1 0 2 1 2 2v10" />
  <path d="M19 19v2" />
  <path d="M3 3l18 18" />
</svg>
