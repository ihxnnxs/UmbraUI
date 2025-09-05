<!--
tags: [identity, indefinite]
category: Gender
version: "1.64"
unicode: "f0e9"
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
  <path d="M10 15.464a4 4 0 1 0 4 -6.928a4 4 0 0 0 -4 6.928z" />
  <path d="M15.464 14l3 -5.196" />
  <path d="M5.536 15.195l3 -5.196" />
  <path d="M12 12h.01" />
  <path d="M9 9l-6 -6" />
  <path d="M5.5 8.5l3 -3" />
  <path d="M21 21l-6 -6" />
  <path d="M17 20l3 -3" />
  <path d="M3 7v-4h4" />
</svg>
