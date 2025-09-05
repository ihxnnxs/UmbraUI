<!--
tags: [engine, creation, 3d, 2d]
category: Brand
unicode: "f49d"
version: "1.96"
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
  <path d="M14 3l6 4v7" />
  <path d="M18 17l-6 4l-6 -4" />
  <path d="M4 14v-7l6 -4" />
  <path d="M4 7l8 5v9" />
  <path d="M20 7l-8 5" />
</svg>
