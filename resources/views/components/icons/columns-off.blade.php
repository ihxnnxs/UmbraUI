<!--
category: Text
tags: [text, gap, table]
version: "1.63"
unicode: "f0d4"
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
  <path d="M4 6h2" />
  <path d="M4 10h5.5" />
  <path d="M4 14h5.5" />
  <path d="M4 18h5.5" />
  <path d="M14.5 6h5.5" />
  <path d="M14.5 10h5.5" />
  <path d="M18 14h2" />
  <path d="M14.5 18h3.5" />
  <path d="M3 3l18 18" />
</svg>
