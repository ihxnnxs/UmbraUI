<!--
tags: [math, geometry]
category: Arrows
version: "1.43"
unicode: "ef46"
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
  <path d="M11 20h-.01" />
  <path d="M15 20h-.01" />
  <path d="M19 20h-.01" />
  <path d="M4 7l3 -3l3 3" />
  <path d="M7 20v-16" />
</svg>
