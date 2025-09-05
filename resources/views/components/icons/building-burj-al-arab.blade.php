<!--
tags: [hotel, dubai, landmark, luxury, architecture, sail, iconic, resort, skyline, tourism]
category: Buildings
unicode: "ff50"
version: "3.10"
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
  <path d="M3 21h18" />
  <path d="M7 21v-18" />
  <path d="M7 4c5.675 .908 10 5.613 10 11.28a11 11 0 0 1 -1.605 5.72" />
  <path d="M5 9h12" />
  <path d="M7 13h4" />
  <path d="M7 17h4" />
</svg>
