<!--
category: Devices
tags: [mobile, network, wireless, connectivity, telecommunication, bandwidth, speed, service, highspeed, coverage]
version: "2.11"
unicode: "f9fb"
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
  <path d="M7 16v-8" />
  <path d="M11 8v8" />
  <path d="M7 12h4" />
  <path d="M14 12h4" />
  <path d="M16 10v4" />
</svg>
