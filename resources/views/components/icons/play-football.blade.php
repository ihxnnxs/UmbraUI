<!--
tags: [soccer, sport, field, goal, ball, team, competition, athlete, kick, game]
category: Sport
version: "2.17"
unicode: "fa67"
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
  <path d="M11 4a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
  <path d="M3 17l5 1l.75 -1.5" />
  <path d="M14 21v-4l-4 -3l1 -6" />
  <path d="M6 12v-3l5 -1l3 3l3 1" />
  <path d="M19.5 20a.5 .5 0 1 0 0 -1a.5 .5 0 0 0 0 1z" fill="currentColor" />
</svg>
