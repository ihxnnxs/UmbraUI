<!--
tags: [direction, west, east]
category: Arrows
version: "1.57"
unicode: "f04b"
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
  <path d="M17 13l4 -4l-4 -4" />
  <path d="M7 13l-4 -4l4 -4" />
  <path d="M12 14a5 5 0 0 1 5 -5h4" />
  <path d="M12 19v-5a5 5 0 0 0 -5 -5h-4" />
</svg>
