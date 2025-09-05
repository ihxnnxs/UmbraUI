<!--
tags: [direction, east, navigation, arrow, navigate]
version: "1.58"
unicode: "f06c"
category: Map
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
  <path d="M8 21h4" />
  <path d="M10 21v-10" />
  <path d="M10 6v-3" />
  <path d="M6 6h10l2 2.5l-2 2.5h-10z" />
</svg>
