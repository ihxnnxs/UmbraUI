<!--
tags: [rectangle, side, up, north]
category: Design
version: "1.80"
unicode: "f2ab"
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
  <path d="M4 10.005h16v-5a1 1 0 0 0 -1 -1h-14a1 1 0 0 0 -1 1v5z" />
  <path d="M4 15.005v-.01" />
  <path d="M4 20.005v-.01" />
  <path d="M9 20.005v-.01" />
  <path d="M15 20.005v-.01" />
  <path d="M20 20.005v-.01" />
  <path d="M20 15.005v-.01" />
</svg>
