<!--
tags: [diagram, chemistry, modules, geometric]
category: Shapes
version: "1.61"
unicode: "f09d"
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
  <path d="M4 18v-5l4 -2l4 2v5l-4 2z" />
  <path d="M8 11v-5l4 -2l4 2v5" />
  <path d="M12 13l4 -2l4 2v5l-4 2l-4 -2" />
</svg>
