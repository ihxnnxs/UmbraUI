<!--
tags: [web, services, technology, inbox, mail, news, search]
category: Brand
version: "1.32"
unicode: "ed73"
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
  <path d="M3 6l5 0" />
  <path d="M7 18l7 0" />
  <path d="M4.5 6l5.5 7v5" />
  <path d="M10 13l6 -5" />
  <path d="M12.5 8l5 0" />
  <path d="M20 11l0 4" />
  <path d="M20 18l0 .01" />
</svg>
