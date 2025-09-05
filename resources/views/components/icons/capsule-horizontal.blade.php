<!--
tags: [medicine, pharmaceutical, pill, treatment, drug, remedy, softgel, tablet, horizontal, health]
category: Shapes
version: "2.23"
unicode: "fae2"
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
  <path d="M3 6m0 6a6 6 0 0 1 6 -6h6a6 6 0 0 1 6 6v0a6 6 0 0 1 -6 6h-6a6 6 0 0 1 -6 -6z" />
</svg>
