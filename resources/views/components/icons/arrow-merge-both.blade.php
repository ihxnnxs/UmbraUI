<!--
tags: [direction, up, north, higher, right, left]
category: Arrows
version: "1.74"
unicode: "f23b"
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
  <path d="M16 8l-4 -4l-4 4" />
  <path d="M12 20v-16" />
  <path d="M18 18c-4 -1.333 -6 -4.667 -6 -10" />
  <path d="M6 18c4 -1.333 6 -4.667 6 -10" />
</svg>
