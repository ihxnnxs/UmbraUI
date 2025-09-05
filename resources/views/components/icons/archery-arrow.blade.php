<!--
category: Games
tags: [bow, target, shoot, sports, archer, hunting, bullseye, flight, quiver, precision]
version: "2.32"
unicode: "fc55"
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
  <path d="M14 7v3h3l3 -3h-3v-3z" />
  <path d="M14 10l-9 9" />
  <path d="M5 15v4h4" />
</svg>
