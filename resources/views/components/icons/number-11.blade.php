<!--
category: Numbers
tags: [eleven, prime, odd, numeric, count, afterten, doubleone, scoreplusone, complementary, digits]
unicode: "1005d"
version: "3.18"
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
  <path d="M8 20v-16l-5 5" />
  <path d="M18 20v-16l-5 5" />
</svg>
