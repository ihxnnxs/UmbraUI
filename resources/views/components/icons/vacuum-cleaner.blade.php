<!--
tags: [robot, clean, hoover, home, electronics]
unicode: "f5e6"
version: "1.112"
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
  <path d="M21 12a9 9 0 1 1 -18 0a9 9 0 0 1 18 0z" />
  <path d="M14 9a2 2 0 1 1 -4 0a2 2 0 0 1 4 0z" />
  <path d="M12 16h.01" />
</svg>
