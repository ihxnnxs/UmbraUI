<!--
tags: [software, text, editing, programming]
category: Brand
version: "1.45"
unicode: "ef74"
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
  <path d="M19 8l-14 4.5v-5.5l14 -4.5z" />
  <path d="M19 17l-14 4.5v-5.5l14 -4.5z" />
  <path d="M19 11.5l-14 -4.5" />
  <path d="M5 12.5l14 4.5" />
</svg>
