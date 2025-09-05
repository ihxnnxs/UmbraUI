<!--
tags: [tv, serial, films, stand-up, skits]
category: Brand
version: "1.72"
unicode: "f217"
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
  <path d="M5.343 17.657a8 8 0 1 0 0 -11.314" />
  <path d="M13.828 9.172a4 4 0 1 0 0 5.656" />
</svg>
