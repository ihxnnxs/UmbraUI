<!--
tags: [mathematic, expression, equation]
category: Math
unicode: "f4f7"
version: "1.100"
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
  <path d="M2 9l3 5.063" />
  <path d="M8 9l-4.8 9" />
  <path d="M16 9l3 5.063" />
  <path d="M22 9l-4.8 9" />
  <path d="M10 12h4" />
</svg>
