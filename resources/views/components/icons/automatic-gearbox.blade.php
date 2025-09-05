<!--
tags: [transmission, gear, vehicle, automation, system, car, drive, mechanism, engage, control]
category: Vehicles
version: "2.35"
unicode: "fc89"
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
  <path d="M17 17v4h1a2 2 0 1 0 0 -4h-1z" />
  <path d="M17 11h1.5a1.5 1.5 0 0 0 0 -3h-1.5v5" />
  <path d="M5 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M5 7v3a1 1 0 0 0 1 1h3v7a1 1 0 0 0 1 1h3" />
  <path d="M9 11h4" />
</svg>
