<!--
tags: [navigation, direction, symbol, downward, arch, flow, guide, movement, path, down]
category: Arrows
version: "2.46"
unicode: "fd86"
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
  <path d="M12 15v-12" />
  <path d="M16 7l-4 -4l-4 4" />
  <path d="M3 12a9 9 0 0 0 18 0" />
</svg>
