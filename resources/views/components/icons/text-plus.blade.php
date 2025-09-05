<!--
tags: [add, new, document, file, edit]
category: Text
version: "1.79"
unicode: "f2a5"
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
  <path d="M19 10h-14" />
  <path d="M5 6h14" />
  <path d="M14 14h-9" />
  <path d="M5 18h6" />
  <path d="M18 15v6" />
  <path d="M15 18h6" />
</svg>
