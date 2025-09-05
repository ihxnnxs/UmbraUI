<!--
tags: [location, gesture, move]
version: "1.3"
category: Design
unicode: "eb89"
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
  <path d="M19 11v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2" />
  <path d="M13 13l9 3l-4 2l-2 4l-3 -9" />
  <path d="M3 3l0 .01" />
  <path d="M7 3l0 .01" />
  <path d="M11 3l0 .01" />
  <path d="M15 3l0 .01" />
  <path d="M3 7l0 .01" />
  <path d="M3 11l0 .01" />
  <path d="M3 15l0 .01" />
</svg>
