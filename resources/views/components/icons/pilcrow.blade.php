<!--
tags: [paragraph, letter, text, symbol]
category: Text
unicode: "f5f6"
version: "1.113"
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
  <path d="M13 4v16" />
  <path d="M17 4v16" />
  <path d="M19 4h-9.5a4.5 4.5 0 0 0 0 9h3.5" />
</svg>
