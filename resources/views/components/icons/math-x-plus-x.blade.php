<!--
tags: [mathematic, expression, equation]
category: Math
unicode: "f4f4"
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
  <path d="M2 9l6 6" />
  <path d="M2 15l6 -6" />
  <path d="M16 9l6 6" />
  <path d="M16 15l6 -6" />
  <path d="M10 12h4" />
  <path d="M12 10v4" />
</svg>
