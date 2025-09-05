<!--
tags: [cube, side, up, north-east]
category: Design
version: "1.82"
unicode: "f2d1"
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
  <path d="M19 11.01h-5a1 1 0 0 1 -1 -1v-5a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1z" />
  <path d="M20 15.01v-.01" />
  <path d="M20 20.01v-.01" />
  <path d="M15 20.01v-.01" />
  <path d="M9 20.01v-.01" />
  <path d="M9 4.01v-.01" />
  <path d="M4 20.01v-.01" />
  <path d="M4 15.01v-.01" />
  <path d="M4 9.01v-.01" />
  <path d="M4 4.01v-.01" />
</svg>
