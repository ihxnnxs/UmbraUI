<!--
category: Food
tags: [candy, dessert, frozen, sweet]
version: "1.66"
unicode: "f148"
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
  <path d="M12 21.5v-4.5" />
  <path d="M8 8v9h8v-1m0 -4v-5a4 4 0 0 0 -7.277 -2.294" />
  <path d="M8 10.5l1.74 -.76m2.79 -1.222l3.47 -1.518" />
  <path d="M8 14.5l4.488 -1.964" />
  <path d="M3 3l18 18" />
</svg>
