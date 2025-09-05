<!--
category: System
tags: [list, options, navigation, panel, browse, index, select, catalog, overview, layout]
unicode: "ff43"
version: "3.10"
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
  <path d="M10 6h10" />
  <path d="M4 12h16" />
  <path d="M7 12h13" />
  <path d="M4 18h10" />
</svg>
