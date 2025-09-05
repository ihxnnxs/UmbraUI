<!--
category: E-commerce
tags: [clothes, wardrobe, hook, hang, wooden, plastic, wire, shop, store, clothing, fashion]
version: "1.66"
unicode: "f13e"
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
  <path d="M14 6a2 2 0 1 0 -4 0m6.506 6.506l3.461 1.922a2 2 0 0 1 1.029 1.749v.823m-2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l6.673 -3.707" />
  <path d="M3 3l18 18" />
</svg>
