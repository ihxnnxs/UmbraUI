<!--
category: Vehicles
tags: [construction, building, machine, lifting]
version: "1.65"
unicode: "f109"
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
  <path d="M6 21h6" />
  <path d="M9 21v-12" />
  <path d="M9 5v-2l-1 1" />
  <path d="M6 6l-3 3h6" />
  <path d="M13 9h8" />
  <path d="M9 3l10 6" />
  <path d="M17 9v4a2 2 0 0 1 2 2m-2 2a2 2 0 0 1 -2 -2" />
  <path d="M3 3l18 18" />
</svg>
