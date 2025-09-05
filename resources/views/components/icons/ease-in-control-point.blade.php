<!--
tags: [animation, graph, curve, function]
category: Design
unicode: "f570"
version: "1.107"
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
  <path d="M3 19c8 0 18 -16 18 -16" />
  <path d="M17 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0z" />
  <path d="M17 19h-2" />
  <path d="M12 19h-2" />
</svg>
