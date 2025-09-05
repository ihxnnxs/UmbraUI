<!--
tags: [proceed, swipe, below, shape, top, north]
category: Arrows
unicode: "f620"
version: "1.116"
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
  <path d="M12 16v-13" />
  <path d="M15 6l-3 -3l-3 3" />
  <path d="M14.5 18.5l-2.5 2.5l-2.5 -2.5l2.5 -2.5z" />
</svg>
