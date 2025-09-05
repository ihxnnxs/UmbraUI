<!--
category: Design
tags: [advert, advertisement, marketing, commercial, traffic]
unicode: "f3b7"
version: "1.94"
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
  <path d="M9 5h10a2 2 0 0 1 2 2v10m-2 2h-14a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2" />
  <path d="M7 15v-4a2 2 0 0 1 2 -2m2 2v4" />
  <path d="M7 13h4" />
  <path d="M17 9v4" />
  <path d="M16.115 12.131c.33 .149 .595 .412 .747 .74" />
  <path d="M3 3l18 18" />
</svg>
