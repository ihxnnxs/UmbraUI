<!--
tags: [direction, bar, navigation, symbol, indicator, bi-directional, interface, ui, path, flow]
category: Arrows
version: "2.23"
unicode: "fadd"
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
  <path d="M8 12h-6" />
  <path d="M5 15l-3 -3l3 -3" />
  <path d="M22 12h-6" />
  <path d="M19 15l3 -3l-3 -3" />
  <path d="M12 4v16" />
</svg>
