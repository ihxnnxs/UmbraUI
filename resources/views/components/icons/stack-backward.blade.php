<!--
tags: [layers, depth, background, arrangement, reorder, reverse, underneath, position, sequence, arrange]
version: "2.40"
unicode: "fd27"
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
  <path d="M14 12l6 -3l-8 -4l-8 4l6 3" />
  <path d="M10 12l-6 3l8 4l8 -4l-6 -3l-2 1z" fill="currentColor" />
</svg>
