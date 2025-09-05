<!--
tags: [analytics, variable, data, statistics, analysis, correlation, relationship, dependency, visualization, graph]
category: Charts
unicode: "ffa4"
version: "3.12"
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
  <path d="M18 11h.009" />
  <path d="M14 15h.009" />
  <path d="M12 6h.009" />
  <path d="M8 10h.009" />
  <path d="M3 21l17 -17" />
  <path d="M3 3v18h18" />
</svg>
