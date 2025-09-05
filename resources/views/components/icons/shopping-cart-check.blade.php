<!--
category: E-commerce
tags: [confirm, verify, validate, approve, authenticate, review, certify, ratify, endorse, sanction]
version: "2.28"
unicode: "fb59"
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
  <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M11.5 17h-5.5v-14h-2" />
  <path d="M6 5l14 1l-1 7h-13" />
  <path d="M15 19l2 2l4 -4" />
</svg>
