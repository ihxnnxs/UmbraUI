<!--
tags: [alphabet, type, catalog, index, arrange, sequence, layout, write, text, document]
version: "2.31"
unicode: "fc47"
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
  <path d="M11 6h9" />
  <path d="M11 12h9" />
  <path d="M11 18h9" />
  <path d="M4 10v-4.5a1.5 1.5 0 0 1 3 0v4.5" />
  <path d="M4 8h3" />
  <path d="M4 20h1.5a1.5 1.5 0 0 0 0 -3h-1.5h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6z" />
</svg>
