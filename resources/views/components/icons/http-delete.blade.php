<!--
tags: [remove, clear, erase, discard, eliminate, cancel, purge, abolish, annul, suppress]
category: Computers
version: "2.14"
unicode: "fa29"
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
  <path d="M3 8v8h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2z" />
  <path d="M14 8h-4v8h4" />
  <path d="M10 12h2.5" />
  <path d="M17 8v8h4" />
</svg>
