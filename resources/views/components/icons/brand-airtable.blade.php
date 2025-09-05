<!--
tags: [creation of, sharing, database, interface]
category: Brand
version: "1.45"
unicode: "ef6a"
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
  <path d="M3 10v8l7 -3v-2.6z" />
  <path d="M3 6l9 3l9 -3l-9 -3z" />
  <path d="M14 12.3v8.7l7 -3v-8z" />
</svg>
