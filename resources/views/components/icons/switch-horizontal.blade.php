<!--
tags: [toggle, left, right, arrows]
category: Arrows
version: "1.0"
unicode: "eb31"
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
  <path d="M16 3l4 4l-4 4" />
  <path d="M10 7l10 0" />
  <path d="M8 13l-4 4l4 4" />
  <path d="M4 17l9 0" />
</svg>
