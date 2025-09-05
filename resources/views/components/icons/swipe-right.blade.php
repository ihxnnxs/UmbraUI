<!--
tags: [gesture, swipe, rightward-swipe, scroll-right, slide-right, touch-gesture, screen-swipe, gesture-control, interaction, user-swipe]
category: Arrows
version: "2.43"
unicode: "fd60"
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
  <path d="M4 12a4 4 0 1 1 8 0a4 4 0 0 1 -8 0z" />
  <path d="M12 12h8" />
  <path d="M17 15l3 -3l-3 -3" />
</svg>
