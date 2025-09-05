<!--
tags: [analytics, data, visualization, statistics, scatterplot, dimensions, depth, relationship, distribution, graph]
category: Charts
version: "2.46"
unicode: "fd92"
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
  <path d="M3 20l9 -7" />
  <path d="M12 3v10l9 7" />
  <path d="M17 12v.015" />
  <path d="M17 4.015v.015" />
  <path d="M21 8.015v.015" />
  <path d="M12 19.015v.015" />
  <path d="M3 12.015v.015" />
  <path d="M7 8.015v.015" />
  <path d="M3 4.015v.015" />
</svg>
