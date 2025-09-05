<!--
category: Shapes
tags: [decrease, eliminate, subtract, reduce, lessen, lower, diminish, remove, deduct, negative]
version: "2.35"
unicode: "fc8c"
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
  <path d="M20.475 15.029a9 9 0 1 0 -7.962 5.957" />
  <path d="M16 19h6" />
</svg>
