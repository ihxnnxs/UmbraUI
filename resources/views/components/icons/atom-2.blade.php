<!--
tags: [unit, element, part, electrons, protons, neutrons]
version: "1.7"
unicode: "ebdf"
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
  <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M12 21l0 .01" />
  <path d="M3 9l0 .01" />
  <path d="M21 9l0 .01" />
  <path d="M8 20.1a9 9 0 0 1 -5 -7.1" />
  <path d="M16 20.1a9 9 0 0 0 5 -7.1" />
  <path d="M6.2 5a9 9 0 0 1 11.4 0" />
</svg>
