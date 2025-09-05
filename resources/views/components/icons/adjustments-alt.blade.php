<!--
category: System
tags: [equalizer, sliders, controls, settings, filter]
version: "1.11"
unicode: "ec37"
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
  <path d="M4 8h4v4h-4z" />
  <path d="M6 4l0 4" />
  <path d="M6 12l0 8" />
  <path d="M10 14h4v4h-4z" />
  <path d="M12 4l0 10" />
  <path d="M12 18l0 2" />
  <path d="M16 5h4v4h-4z" />
  <path d="M18 4l0 1" />
  <path d="M18 9l0 11" />
</svg>
