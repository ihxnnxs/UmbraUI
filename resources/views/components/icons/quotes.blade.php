<!--
tags: [chat, message, text, punctuation, quotation, comment]
category: Text
version: "2.25"
unicode: "fb1e"
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
  <path d="M4 12c-1.333 -1.854 -1.333 -4.146 0 -6" />
  <path d="M8 12c-1.333 -1.854 -1.333 -4.146 0 -6" />
  <path d="M16 18c1.333 -1.854 1.333 -4.146 0 -6" />
  <path d="M20 18c1.333 -1.854 1.333 -4.146 0 -6" />
</svg>
