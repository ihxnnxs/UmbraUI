<!--
tags: [hierarchy, network, structure, connection]
category: Computers
unicode: "f5df"
version: "1.112"
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
  <path d="M14 20a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
  <path d="M14 4a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
  <path d="M6 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
  <path d="M22 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
  <path d="M13.5 5.5l5 5" />
  <path d="M5.5 13.5l5 5" />
  <path d="M13.5 18.5l5 -5" />
  <path d="M10.5 5.5l-5 5" />
</svg>
