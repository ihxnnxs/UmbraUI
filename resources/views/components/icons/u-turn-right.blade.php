<!--
tags: [reverse, change, flip, rotate, revert, backward, loop, swerve, return, redirect]
category: Arrows
unicode: "fea1"
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
  <path d="M7 20v-11.5a4.5 4.5 0 0 1 9 0v8.5" />
  <path d="M13 14l3 3l3 -3" />
</svg>
