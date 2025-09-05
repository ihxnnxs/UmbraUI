<!--
tags: [direction, west]
category: Arrows
version: "1.57"
unicode: "f057"
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
  <path d="M16 10a3 3 0 1 1 0 -6a3 3 0 0 1 0 6z" />
  <path d="M16 10v10" />
  <path d="M13 7h-10" />
  <path d="M7 11l-4 -4l4 -4" />
</svg>
