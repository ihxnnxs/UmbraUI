<!--
tags: [construction, building, machine, lifting]
category: Vehicles
version: "1.41"
unicode: "ef27"
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
  <path d="M9 21v-18l-6 6h18" />
  <path d="M9 3l10 6" />
  <path d="M17 9v4a2 2 0 1 1 -2 2" />
</svg>
