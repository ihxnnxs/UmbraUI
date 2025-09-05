<!--
category: Photography
tags: [dark, darker, screen]
version: "1.3"
unicode: "eb7d"
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
  <path d="M12 5l0 .01" />
  <path d="M17 7l0 .01" />
  <path d="M19 12l0 .01" />
  <path d="M17 17l0 .01" />
  <path d="M12 19l0 .01" />
  <path d="M7 17l0 .01" />
  <path d="M5 12l0 .01" />
  <path d="M7 7l0 .01" />
</svg>
