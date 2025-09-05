<!--
category: Electrical
tags: [electric, diagram, electricity, battery, power]
version: "1.77"
unicode: "f276"
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
  <path d="M2 12h9" />
  <path d="M15 12h7" />
  <path d="M11 5v14" />
  <path d="M15 9v6" />
  <path d="M3 5h4" />
  <path d="M5 3v4" />
</svg>
