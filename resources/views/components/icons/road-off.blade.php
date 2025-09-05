<!--
category: Map
tags: [car, travel, journey, traffic, highway, route, racing]
version: "1.66"
unicode: "f191"
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
  <path d="M4 19l3.332 -11.661" />
  <path d="M16 5l2.806 9.823" />
  <path d="M12 8v-2" />
  <path d="M12 13v-1" />
  <path d="M12 18v-2" />
  <path d="M3 3l18 18" />
</svg>
