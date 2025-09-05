<!--
tags: [direction, west, navigation, arrow, navigate]
version: "1.58"
unicode: "f06b"
category: Map
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
  <path d="M16 21h-4" />
  <path d="M14 21v-10" />
  <path d="M14 6v-3" />
  <path d="M18 6h-10l-2 2.5l2 2.5h10z" />
</svg>
