<!--
tags: [direction, north, south]
version: "1.53"
category: Arrows
unicode: "effe"
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
  <path d="M16 4h4v4" />
  <path d="M15 9l5 -5" />
  <path d="M4 20l5 -5" />
  <path d="M16 20h4v-4" />
  <path d="M4 4l16 16" />
</svg>
