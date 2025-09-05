<!--
tags: [grammar, spelling, ortography]
category: Text
version: "1.79"
unicode: "f2a6"
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
  <path d="M5 15v-7.5a3.5 3.5 0 0 1 7 0v7.5" />
  <path d="M5 10h7" />
  <path d="M10 18l3 3l7 -7" />
</svg>
