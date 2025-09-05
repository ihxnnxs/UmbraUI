<!--
tags: [space, inline, display]
category: Text
version: "1.3"
unicode: "eb94"
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
  <path d="M3 8l3 -3l3 3" />
  <path d="M3 16l3 3l3 -3" />
  <path d="M6 5l0 14" />
  <path d="M13 6l7 0" />
  <path d="M13 12l7 0" />
  <path d="M13 18l7 0" />
</svg>
