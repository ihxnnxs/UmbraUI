<!--
category: Text
tags: [brackets, source, programming, command]
version: "1.63"
unicode: "f0d0"
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
  <path d="M7 8l-4 4l4 4" />
  <path d="M17 8l4 4l-2.5 2.5" />
  <path d="M14 4l-1.201 4.805m-.802 3.207l-2 7.988" />
  <path d="M3 3l18 18" />
</svg>
