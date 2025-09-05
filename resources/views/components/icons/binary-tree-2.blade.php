<!--
category: Computers
tags: [data, diversity, it, math]
unicode: "f5d3"
version: "1.112"
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
  <path d="M14 6a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
  <path d="M7 14a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
  <path d="M21 14a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
  <path d="M14 18a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
  <path d="M12 8v8" />
  <path d="M6.316 12.496l4.368 -4.992" />
  <path d="M17.684 12.496l-4.366 -4.99" />
</svg>
