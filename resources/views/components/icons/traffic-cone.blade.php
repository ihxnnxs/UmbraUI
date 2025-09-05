<!--
category: Map
tags: [street, road, vehicle, repair, warning, lane, drive]
version: "1.8"
unicode: "ec0f"
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
  <path d="M4 20l16 0" />
  <path d="M9.4 10l5.2 0" />
  <path d="M7.8 15l8.4 0" />
  <path d="M6 20l5 -15h2l5 15" />
</svg>
