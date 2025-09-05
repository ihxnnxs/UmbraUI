<!--
tags: [exchange, finance, money, cash, laos]
category: Currencies
unicode: "f373"
version: "1.90"
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
  <path d="M6 12h12" />
  <path d="M9 5v14" />
  <path d="M16 19a7 7 0 0 0 -7 -7a7 7 0 0 0 7 -7" />
</svg>
