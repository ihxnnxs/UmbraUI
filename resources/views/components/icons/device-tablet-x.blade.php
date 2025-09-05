<!--
category: Devices
tags: [tablet, close, delete, exit, stop, remove, terminate, cross, cancel, end]
version: "2.10"
unicode: "f8d2"
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
  <path d="M13 21h-7a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v9.5" />
  <path d="M22 22l-5 -5" />
  <path d="M17 22l5 -5" />
  <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
</svg>
