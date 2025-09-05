<!--
category: System
tags: [confirm, verify, approve, validate, assure, certify, endorse, ratify]
version: "2.8"
unicode: "f7c1"
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
  <path d="M20.942 13.021a9 9 0 1 0 -9.407 7.967" />
  <path d="M12 7v5l3 3" />
  <path d="M15 19l2 2l4 -4" />
</svg>
