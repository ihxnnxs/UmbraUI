<!--
tags: [start, zero, time, clock, reset, begin, initial, nop, default, none]
category: System
version: "2.22"
unicode: "fad4"
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
  <path d="M3 12v.01" />
  <path d="M21 12v.01" />
  <path d="M12 21v.01" />
  <path d="M12 3v.01" />
  <path d="M7.5 4.2v.01" />
  <path d="M16.5 4.2v.01" />
  <path d="M16.5 19.8v.01" />
  <path d="M7.5 19.8v.01" />
  <path d="M4.2 16.5v.01" />
  <path d="M19.8 16.5v.01" />
  <path d="M19.8 7.5v.01" />
  <path d="M4.2 7.5v.01" />
  <path d="M10 11v2a2 2 0 1 0 4 0v-2a2 2 0 1 0 -4 0z" />
</svg>
