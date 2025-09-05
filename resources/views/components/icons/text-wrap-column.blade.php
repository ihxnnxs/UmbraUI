<!--
category: Text
tags: [wrap, column, text, typography, writing]
unicode: "feb2"
version: "3.2"
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
  <path d="M7 9h7a3 3 0 0 1 0 6h-4l2 -2" />
  <path d="M12 17l-2 -2" />
  <path d="M3 3v18" />
  <path d="M21 3v18" />
</svg>
