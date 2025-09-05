<!--
tags: [javascript, programming, coding]
category: Brand
unicode: "f324"
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
  <path d="M3 11.5l4.5 4.5h9l-9 -9z" />
  <path d="M16.5 16l4.5 -4.5l-4.5 -4.5l-4.5 4.5" />
</svg>
