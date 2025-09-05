<!--
category: Devices
tags: [exit, remove, delete, erase, terminate, stop, cancel, clear, banish, cross]
version: "2.10"
unicode: "f8bf"
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
  <path d="M13 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
  <path d="M22 22l-5 -5" />
  <path d="M17 22l5 -5" />
  <path d="M11 4h2" />
  <path d="M12 17v.01" />
</svg>
