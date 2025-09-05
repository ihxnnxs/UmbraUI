<!--
tags: [4g, mobile, network, speed, connectivity, data, wireless, cellular, broadband, internet]
version: "2.11"
unicode: "f9fd"
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
  <path d="M21 8h-4v8h4" />
  <path d="M17 12h2.5" />
  <path d="M4 8v8h4" />
  <path d="M10 8h4" />
  <path d="M12 8v8" />
</svg>
