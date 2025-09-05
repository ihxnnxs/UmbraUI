<!--
category: Text
tags: [text, gap, table]
version: "1.3"
unicode: "eb83"
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
  <path d="M4 6l5.5 0" />
  <path d="M4 10l5.5 0" />
  <path d="M4 14l5.5 0" />
  <path d="M4 18l5.5 0" />
  <path d="M14.5 6l5.5 0" />
  <path d="M14.5 10l5.5 0" />
  <path d="M14.5 14l5.5 0" />
  <path d="M14.5 18l5.5 0" />
</svg>
