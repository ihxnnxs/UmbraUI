<!--
category: Health
tags: [sight, defect, see, vision, frames, lenses, visually, impaired, myopia, far-sighted]
version: "1.39"
unicode: "ee8a"
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
  <path d="M8 4h-2l-3 10" />
  <path d="M16 4h2l3 10" />
  <path d="M10 16l4 0" />
  <path d="M21 16.5a3.5 3.5 0 0 1 -7 0v-2.5h7v2.5" />
  <path d="M10 16.5a3.5 3.5 0 0 1 -7 0v-2.5h7v2.5" />
</svg>
