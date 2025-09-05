<!--
category: Development
tags: [artificial intelligence, letters, text, technology, robot, automatic, character]
unicode: "fee7"
version: "3.4"
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
  <path d="M8 16v-6a2 2 0 1 1 4 0v6" />
  <path d="M8 13h4" />
  <path d="M16 8v8" />
</svg>
