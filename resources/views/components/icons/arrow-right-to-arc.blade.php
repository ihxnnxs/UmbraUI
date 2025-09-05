<!--
tags: [navigation, direction, rightward, arch, symbol, interface, path, flow, guide, ui]
category: Arrows
version: "2.46"
unicode: "fd8b"
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
  <path d="M3 12h12" />
  <path d="M11 8l4 4l-4 4" />
  <path d="M12 21a9 9 0 0 0 0 -18" />
</svg>
