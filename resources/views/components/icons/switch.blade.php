<!--
tags: [toggle, arrows]
category: Arrows
version: "1.0"
unicode: "eb33"
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
  <path d="M15 4l4 0l0 4" />
  <path d="M14.75 9.25l4.25 -5.25" />
  <path d="M5 19l4 -4" />
  <path d="M15 19l4 0l0 -4" />
  <path d="M5 5l14 14" />
</svg>
