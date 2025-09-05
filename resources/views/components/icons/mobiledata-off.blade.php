<!--
tags: [disconnect, block, disable, inactive, unavailable, halt, offline, terminate, stop]
version: "2.11"
unicode: "f9f4"
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
  <path d="M16 12v-8" />
  <path d="M8 20v-8" />
  <path d="M13 7l3 -3l3 3" />
  <path d="M5 17l3 3l3 -3" />
  <path d="M3 3l18 18" />
</svg>
