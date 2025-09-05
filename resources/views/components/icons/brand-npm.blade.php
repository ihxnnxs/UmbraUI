<!--
tags: [package, manager, node.js, javascript]
category: Brand
unicode: "f569"
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
  <path d="M1 8h22v7h-12v2h-4v-2h-6z" />
  <path d="M7 8v7" />
  <path d="M14 8v7" />
  <path d="M17 11v4" />
  <path d="M4 11v4" />
  <path d="M11 11v1" />
  <path d="M20 11v4" />
</svg>
