<!--
tags: [javascript, 3d, library, interface, software, make, animation]
category: Brand
unicode: "f5f0"
version: "1.113"
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
  <path d="M8 22l-5 -19l19 5.5z" />
  <path d="M12.573 17.58l-6.152 -1.576l8.796 -9.466l1.914 6.64" />
  <path d="M12.573 17.58l-1.573 -6.58l6.13 2.179" />
  <path d="M9.527 4.893l1.473 6.107l-6.31 -1.564z" />
</svg>
