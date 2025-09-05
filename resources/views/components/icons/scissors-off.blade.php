<!--
category: Design
tags: [cut, paper, file, document, hairdresser, blade, sharp]
version: "1.66"
unicode: "f19b"
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
  <path d="M4.432 4.442a3 3 0 1 0 4.114 4.146" />
  <path d="M6 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M8.6 15.4l3.4 -3.4m2 -2l5 -5" />
  <path d="M3 3l18 18" />
</svg>
