<!--
tags: [statistics, diagram, graph, rhythm, data, analysis]
category: Charts
version: "1.0"
unicode: "ea57"
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
  <path d="M4 19l4 -6l4 2l4 -5l4 4l0 5l-16 0" />
  <path d="M4 12l3 -4l4 2l5 -6l4 4" />
</svg>
