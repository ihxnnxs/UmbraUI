<!--
tags: [direction, loop, right, east]
category: Arrows
unicode: "f578"
version: "1.108"
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
  <path d="M8.5 16a5.5 5.5 0 1 0 -5.5 -5.5v.5" />
  <path d="M3 16h18" />
  <path d="M18 13l3 3l-3 3" />
</svg>
