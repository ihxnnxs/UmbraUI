<!--
category: Symbols
tags: [sign, marking, administration, administrative, conformity, health, safety, environment, protection, standards, product, europe, eea, economic, area, manufacture]
version: "1.33"
unicode: "ed75"
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
  <path d="M9 6a6 6 0 1 0 0 12" />
  <path d="M21 6a6 6 0 1 0 0 12" />
  <path d="M15 12h6" />
</svg>
