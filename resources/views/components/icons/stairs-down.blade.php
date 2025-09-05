<!--
category: Map
tags: [building, step, floor, staircase, clamber]
version: "1.17"
unicode: "eca4"
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
  <path d="M22 21h-5v-5h-5v-5h-5v-5h-5" />
  <path d="M18 3v7" />
  <path d="M15 7l3 3l3 -3" />
</svg>
