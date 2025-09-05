<!--
tags: [signal, wireless, wi-fi, quality]
version: "1.62"
unicode: "f0aa"
category: Devices
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
  <path d="M6 18v-3" />
  <path d="M10 18v-6" />
  <path d="M14 18v-4" />
  <path d="M14 10v-1" />
  <path d="M18 14v-8" />
  <path d="M3 3l18 18" />
</svg>
