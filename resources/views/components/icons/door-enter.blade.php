<!--
tags: [entrance, open, in, entry]
version: "1.43"
unicode: "ef4c"
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
  <path d="M13 12v.01" />
  <path d="M3 21h18" />
  <path d="M5 21v-16a2 2 0 0 1 2 -2h6m4 10.5v7.5" />
  <path d="M21 7h-7m3 -3l-3 3l3 3" />
</svg>
