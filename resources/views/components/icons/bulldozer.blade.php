<!--
tags: [tractor, construction, site, build, rear, machine]
category: Vehicles
version: "1.34"
unicode: "ee1d"
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
  <path d="M2 17a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M12 17a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M19 13v4a2 2 0 0 0 2 2h1" />
  <path d="M14 19h-10" />
  <path d="M4 15h10" />
  <path d="M9 11v-5h2a3 3 0 0 1 3 3v6" />
  <path d="M5 15v-3a1 1 0 0 1 1 -1h8" />
  <path d="M19 17h-3" />
</svg>
