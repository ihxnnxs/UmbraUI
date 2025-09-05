<!--
tags: [layers, depth, foreground, arrangement, position, sequence, structure, priority, place, front]
version: "2.40"
unicode: "fd29"
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
  <path d="M12 4l-8 4l8 4l8 -4l-8 -4" fill="currentColor" />
  <path d="M8 14l-4 2l8 4l8 -4l-4 -2" />
  <path d="M8 10l-4 2l8 4l8 -4l-4 -2" />
</svg>
