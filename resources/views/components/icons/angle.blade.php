<!--
tags: [geometry, math, degrees]
category: Design
version: "1.41"
unicode: "ef20"
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
  <path d="M21 19h-18l9 -15" />
  <path d="M20.615 15.171h.015" />
  <path d="M19.515 11.771h.015" />
  <path d="M17.715 8.671h.015" />
  <path d="M15.415 5.971h.015" />
</svg>
