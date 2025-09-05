<!--
tags: [hierarchy, structure, outline, directory, classification, taxonomy, organization, scheme, framework, overview]
version: "2.24"
unicode: "fafa"
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
  <path d="M9 6h11" />
  <path d="M12 12h8" />
  <path d="M15 18h5" />
  <path d="M5 6v.01" />
  <path d="M8 12v.01" />
  <path d="M11 18v.01" />
</svg>
