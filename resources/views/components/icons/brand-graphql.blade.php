<!--
tags: [software, communication, server]
category: Brand
unicode: "f32c"
version: "1.86"
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
  <path d="M4 8l8 -5l8 5v8l-8 5l-8 -5z" />
  <path d="M12 4l7.5 12h-15z" />
  <path d="M11 3a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
  <path d="M11 21a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
  <path d="M3 8a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
  <path d="M3 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
  <path d="M19 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
  <path d="M19 8a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
</svg>
