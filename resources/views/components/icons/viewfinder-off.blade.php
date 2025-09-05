<!--
category: Map
tags: [target, aim, focus]
version: "1.67"
unicode: "f1c2"
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
  <path d="M5.65 5.623a9 9 0 1 0 12.71 12.745m1.684 -2.328a9 9 0 0 0 -12.094 -12.08" />
  <path d="M12 3v4" />
  <path d="M12 21v-3" />
  <path d="M3 12h4" />
  <path d="M21 12h-3" />
  <path d="M12 12v.01" />
  <path d="M3 3l18 18" />
</svg>
