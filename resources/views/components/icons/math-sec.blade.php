<!--
category: Math
tags: [secant, geometry, math, circle, ratio, sine, trigonometry, function, angle, formula]
unicode: "ff34"
version: "3.9"
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
  <path d="M3 15c.345 .6 1.258 1 2 1a2 2 0 1 0 0 -4a2 2 0 1 1 0 -4c.746 0 1.656 .394 2 1" />
  <path d="M21 10a2 2 0 1 0 -4 0v4a2 2 0 1 0 4 0" />
  <path d="M14 8h-4v8h4" />
  <path d="M10 12h2.5" />
</svg>
