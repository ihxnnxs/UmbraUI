<!--
tags: [alphabet, letters, alphabetical]
category: Text
version: "1.105"
unicode: "f550"
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
  <path d="M4 8h4l-4 8h4" />
  <path d="M16 16v-6a2 2 0 1 1 4 0v6" />
  <path d="M16 13h4" />
  <path d="M11 12h2" />
</svg>
