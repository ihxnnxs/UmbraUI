<!--
tags: [computer, laptop, device, type]
category: Devices
version: "1.14"
unicode: "ec7f"
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
  <path d="M2 3m0 2a2 2 0 0 1 2 -2h16a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-16a2 2 0 0 1 -2 -2z" />
  <path d="M6 7l0 .01" />
  <path d="M10 7l0 .01" />
  <path d="M14 7l0 .01" />
  <path d="M18 7l0 .01" />
  <path d="M6 11l0 .01" />
  <path d="M18 11l0 .01" />
  <path d="M10 11l4 0" />
  <path d="M10 19l2 2l2 -2" />
</svg>
