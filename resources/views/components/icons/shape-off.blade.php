<!--
category: Design
tags: [draw, square, form, create, outline]
version: "1.66"
unicode: "f1a0"
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
  <path d="M3.575 3.597a2 2 0 0 0 2.849 2.808" />
  <path d="M19 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M17.574 17.598a2 2 0 0 0 2.826 2.83" />
  <path d="M5 7v10" />
  <path d="M9 5h8" />
  <path d="M7 19h10" />
  <path d="M19 7v8" />
  <path d="M3 3l18 18" />
</svg>
