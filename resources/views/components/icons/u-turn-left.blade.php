<!--
tags: [reverse, change, flip, rotate, revert, backward, loop, swerve, return, redirect]
category: Arrows
unicode: "fea2"
version: "3.1"
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
  <path d="M17 20v-11.5a4.5 4.5 0 1 0 -9 0v8.5" />
  <path d="M11 14l-3 3l-3 -3" />
</svg>
