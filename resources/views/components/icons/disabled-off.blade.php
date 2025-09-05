<!--
category: Health
tags: [wheelchair, handicapped]
version: "1.65"
unicode: "f117"
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
  <path d="M11 7a2 2 0 1 0 -2 -2" />
  <path d="M11 11v4h4l4 5" />
  <path d="M15 11h1" />
  <path d="M7 11.5a5 5 0 1 0 6 7.5" />
  <path d="M3 3l18 18" />
</svg>
