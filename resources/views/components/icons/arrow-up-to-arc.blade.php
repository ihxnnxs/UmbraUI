<!--
tags: [navigation, direction, upward, arch, symbol, flow, guide, path, interface, ui]
category: Arrows
version: "2.46"
unicode: "fd8d"
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
  <path d="M12 21v-12" />
  <path d="M8 13l4 -4l4 4" />
  <path d="M21 12a9 9 0 0 0 -18 0" />
</svg>
