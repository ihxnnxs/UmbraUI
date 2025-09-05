<!--
category: Text
tags: [paragraph, symbol, text, indent, typography, align, writing, editor, backward, format]
version: "2.45"
unicode: "fd7f"
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
  <path d="M11 9h-2a3 3 0 1 1 0 -6h7" />
  <path d="M11 3v11" />
  <path d="M15 3v11" />
  <path d="M3 18h18" />
  <path d="M6 15l-3 3l3 3" />
</svg>
