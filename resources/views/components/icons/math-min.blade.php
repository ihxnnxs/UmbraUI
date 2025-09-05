<!--
tags: [symbol]
category: Math
version: "1.64"
unicode: "f0f6"
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
  <path d="M15 18a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M3 13s1 -9 4 -9c2.48 0 5.643 9.565 8.36 12.883" />
  <path d="M18.748 17.038c.702 -.88 1.452 -3.56 2.252 -8.038" />
</svg>
