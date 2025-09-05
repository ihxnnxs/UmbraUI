<!--
category: Arrows
tags: [direction, west]
version: "1.57"
unicode: "f04f"
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
  <path d="M18 3v8.707" />
  <path d="M8 14l-4 -4l4 -4" />
  <path d="M18 21c0 -6.075 -4.925 -11 -11 -11h-3" />
</svg>
