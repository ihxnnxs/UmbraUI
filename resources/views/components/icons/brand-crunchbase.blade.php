<!--
tags: [database, startups, business, funding, investment, innovation, entrepreneurship, data, analytics, profile]
category: Brand
version: "2.9"
unicode: "f7e3"
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
  <path d="M3 19v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
  <path d="M10.414 11.586a2 2 0 1 0 0 2.828" />
  <path d="M15 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M13 7v6" />
</svg>
