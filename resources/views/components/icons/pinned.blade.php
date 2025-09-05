<!--
category: Map
tags: [board, attach, nail, pointed, corkboard, favourite, noticeboard]
version: "1.31"
unicode: "ed60"
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
  <path d="M9 4v6l-2 4v2h10v-2l-2 -4v-6" />
  <path d="M12 16l0 5" />
  <path d="M8 4l8 0" />
</svg>
