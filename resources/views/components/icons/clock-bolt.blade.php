<!--
category: System
tags: [fast, quick, speed, instant, lightning, rapid, swift, flash, hurry, urgent]
version: "2.10"
unicode: "f844"
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
  <path d="M20.984 12.53a9 9 0 1 0 -7.552 8.355" />
  <path d="M12 7v5l3 3" />
  <path d="M19 16l-2 3h4l-2 3" />
</svg>
