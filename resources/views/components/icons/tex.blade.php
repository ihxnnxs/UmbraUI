<!--
tags: [file, document, type, format, filetype]
category: Text
unicode: "f4e0"
version: "1.99"
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
  <path d="M9 8v-1h-6v1" />
  <path d="M6 15v-8" />
  <path d="M21 15l-5 -8" />
  <path d="M16 15l5 -8" />
  <path d="M14 11h-4v8h4" />
  <path d="M10 15h3" />
</svg>
