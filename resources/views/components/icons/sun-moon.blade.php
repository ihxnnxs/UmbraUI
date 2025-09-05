<!--
tags: [weather, day, night, hot, cold]
category: Weather
unicode: "f4a3"
version: "1.96"
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
  <path d="M9.173 14.83a4 4 0 1 1 5.657 -5.657" />
  <path d="M11.294 12.707l.174 .247a7.5 7.5 0 0 0 8.845 2.492a9 9 0 0 1 -14.671 2.914" />
  <path d="M3 12h1" />
  <path d="M12 3v1" />
  <path d="M5.6 5.6l.7 .7" />
  <path d="M3 21l18 -18" />
</svg>
