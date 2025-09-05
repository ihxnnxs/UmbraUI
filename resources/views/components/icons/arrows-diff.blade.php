<!--
tags: [direction, right, left, west, east]
category: Arrows
version: "1.79"
unicode: "f296"
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
  <path d="M11 16h10" />
  <path d="M11 16l4 4" />
  <path d="M11 16l4 -4" />
  <path d="M13 8h-10" />
  <path d="M13 8l-4 4" />
  <path d="M13 8l-4 -4" />
</svg>
