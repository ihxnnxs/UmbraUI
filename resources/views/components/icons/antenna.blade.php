<!--
tags: [reach, tv, network, connetion, signal, communication]
version: "1.61"
category: Devices
unicode: "f094"
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
  <path d="M20 4v8" />
  <path d="M16 4.5v7" />
  <path d="M12 5v16" />
  <path d="M8 5.5v5" />
  <path d="M4 6v4" />
  <path d="M20 8h-16" />
</svg>
