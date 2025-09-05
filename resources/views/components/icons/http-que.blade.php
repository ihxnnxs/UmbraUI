<!--
tags: [question, query, inquiry, ask, intersection, fork, path, avenue, solution, route]
category: Computers
version: "2.16"
unicode: "fa5b"
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
  <path d="M5 8a2 2 0 0 1 2 2v4a2 2 0 1 1 -4 0v-4a2 2 0 0 1 2 -2" />
  <path d="M6 15l1 1" />
  <path d="M21 8h-4v8h4" />
  <path d="M17 12h2.5" />
  <path d="M10 8v6a2 2 0 1 0 4 0v-6" />
</svg>
