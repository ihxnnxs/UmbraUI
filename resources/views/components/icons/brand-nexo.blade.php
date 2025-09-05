<!--
tags: [coin, crypto, cryptocurrency, digital]
category: Brand
unicode: "f5a2"
version: "1.110"
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
  <path d="M17 3l5 3v12l-5 3l-10 -6v-6l10 6v-6l-5 -3z" />
  <path d="M12 6l-5 -3l-5 3v12l5 3l4.7 -3.13" />
</svg>
