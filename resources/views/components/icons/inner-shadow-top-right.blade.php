<!--
tags: [shape, circle, up, north, east]
category: Design
unicode: "f524"
version: "1.103"
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
  <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18z" />
  <path d="M18 12a6 6 0 0 0 -6 -6" />
</svg>
