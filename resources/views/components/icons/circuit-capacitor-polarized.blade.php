<!--
tags: [diagram, electric, electricity]
category: Electrical
version: "1.77"
unicode: "f274"
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
  <path d="M22 12h-8" />
  <path d="M2 12h8" />
  <path d="M10 7v10" />
  <path d="M14 7v10" />
  <path d="M17 5h4" />
  <path d="M19 3v4" />
</svg>
