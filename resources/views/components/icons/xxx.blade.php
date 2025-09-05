<!--
tags: [private, secret, restricted, forbidden, exclusive, classified, intimate, veiled, covert, unspoken]
version: "2.29"
unicode: "fc20"
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
  <path d="M10 8l4 8" />
  <path d="M10 16l4 -8" />
  <path d="M17 8l4 8" />
  <path d="M17 16l4 -8" />
  <path d="M3 8l4 8" />
  <path d="M3 16l4 -8" />
</svg>
