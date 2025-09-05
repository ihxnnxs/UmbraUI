<!--
tags: [layers, depth, foreground, arrangement, advance, position, sequence, structure, order, arrange]
version: "2.40"
unicode: "fd28"
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
  <path d="M12 5l-8 4l8 4l8 -4l-8 -4" fill="currentColor" />
  <path d="M10 12l-6 3l8 4l8 -4l-6 -3" />
</svg>
