<!--
tags: [direction, north]
category: Arrows
version: "1.57"
unicode: "f055"
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
  <path d="M15 15a3 3 0 1 1 0 -6a3 3 0 0 1 0 6z" />
  <path d="M15 15v6" />
  <path d="M12.5 9.5l-6.5 -6.5" />
  <path d="M11 3h-5v5" />
</svg>
