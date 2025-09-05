<!--
category: Design
tags: [hardware, technology, electronic, computer, design, ux, figma]
version: "1.63"
unicode: "f0d6"
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
  <path d="M3 12l3 3l3 -3l-3 -3z" />
  <path d="M18.5 14.5l2.5 -2.5l-3 -3l-2.5 2.5" />
  <path d="M12.499 8.501l2.501 -2.501l-3 -3l-2.5 2.5" />
  <path d="M9 18l3 3l3 -3l-3 -3z" />
  <path d="M3 3l18 18" />
</svg>
