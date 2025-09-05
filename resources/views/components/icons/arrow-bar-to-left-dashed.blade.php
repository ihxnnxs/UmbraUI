<!--
category: Arrows
unicode: "10163"
version: "3.32"
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
  <path d="M10 12l10 0" />
  <path d="M10 12l4 -4" />
  <path d="M10 12l4 4" />
  <path d="M4 20l0 -3m0 -13l0 3m0 3.5l0 3" />
</svg>
