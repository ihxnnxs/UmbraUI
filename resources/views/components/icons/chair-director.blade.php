<!--
tags: [film, seat, furniture, interior]
version: "1.82"
unicode: "f2d5"
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
  <path d="M6 21l12 -9" />
  <path d="M6 12l12 9" />
  <path d="M5 12h14" />
  <path d="M6 3v9" />
  <path d="M18 3v9" />
  <path d="M6 8h12" />
  <path d="M6 5h12" />
</svg>
