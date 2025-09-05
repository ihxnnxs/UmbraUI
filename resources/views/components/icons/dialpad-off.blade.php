<!--
category: Devices
tags: [keypad, telephone, phone, call, number]
version: "1.65"
unicode: "f114"
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
  <path d="M7 7h-4v-4" />
  <path d="M17 3h4v4h-4z" />
  <path d="M10 6v-3h4v4h-3" />
  <path d="M3 10h4v4h-4z" />
  <path d="M17 13v-3h4v4h-3" />
  <path d="M14 14h-4v-4" />
  <path d="M10 17h4v4h-4z" />
  <path d="M3 3l18 18" />
</svg>
