<!--
category: Numbers
tags: [three, maths, value, quantity, calculate, calculation, total, amount, sum, order, digit]
version: "1.38"
unicode: "edf3"
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
  <path d="M12 12a4 4 0 1 0 -4 -4" />
  <path d="M8 16a4 4 0 1 0 4 -4" />
</svg>
