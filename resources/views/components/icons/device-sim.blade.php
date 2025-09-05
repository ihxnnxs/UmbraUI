<!--
tags: [card, phone, mobile, smartphone]
category: Devices
unicode: "f4b2"
version: "1.97"
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
  <path d="M6 3h8.5l4.5 4.5v12.5a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1z" />
  <path d="M9 11h3v6" />
  <path d="M15 17v.01" />
  <path d="M15 14v.01" />
  <path d="M15 11v.01" />
  <path d="M9 14v.01" />
  <path d="M9 17v.01" />
</svg>
