<!--
tags: [electric, electricity, diagram, digital]
category: Electrical
version: "1.77"
unicode: "f279"
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
  <path d="M22 12h-6" />
  <path d="M2 12h6" />
  <path d="M8 7l8 5l-8 5z" />
  <path d="M14 7h2v10h2" />
</svg>
