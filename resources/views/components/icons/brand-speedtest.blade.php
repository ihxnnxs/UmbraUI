<!--
tags: [internet, connection, bandwidth, measurement, network, performance, speed, test, check, latency]
category: Brand
version: "2.18"
unicode: "fa77"
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
  <path d="M5.636 19.364a9 9 0 1 1 12.728 0" />
  <path d="M16 9l-4 4" />
</svg>
