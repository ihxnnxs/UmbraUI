<!--
tags: [recreational, vehicle, outdoor, holiday, vacation, travel, camping, adventure, trip, caravan]
category: Vehicles
version: "2.14"
unicode: "fa25"
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
  <path d="M5 18a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M15 18a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M5 18h-1a1 1 0 0 1 -1 -1v-11a2 2 0 0 1 2 -2h12a4 4 0 0 1 4 4h-18" />
  <path d="M9 18h6" />
  <path d="M19 18h1a1 1 0 0 0 1 -1v-4l-3 -5" />
  <path d="M21 13h-7" />
  <path d="M14 8v10" />
</svg>
