<!--
tags: [sport, game, sportsman, play, match, pitch]
category: Sport
version: "1.39"
unicode: "ee04"
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
  <path d="M15 9l-6 6" />
  <path d="M10 12l2 2" />
  <path d="M12 10l2 2" />
  <path d="M8 21a5 5 0 0 0 -5 -5" />
  <path d="M16 3c-7.18 0 -13 5.82 -13 13a5 5 0 0 0 5 5c7.18 0 13 -5.82 13 -13a5 5 0 0 0 -5 -5" />
  <path d="M16 3a5 5 0 0 0 5 5" />
</svg>
