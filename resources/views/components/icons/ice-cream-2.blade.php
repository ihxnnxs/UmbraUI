<!--
category: Food
tags: [sweet, cold, dessert, food, taste, frozen, snack, flavour, flavor, cone]
version: "1.39"
unicode: "ee9f"
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
  <path d="M17.657 11a6 6 0 1 0 -11.315 0" />
  <path d="M6.342 11l5.658 11l5.657 -11z" />
</svg>
