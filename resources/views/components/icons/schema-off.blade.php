<!--
category: Database
tags: [graph, data, infography]
unicode: "f426"
version: "1.94"
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
  <path d="M6 2h4v4m-4 0h-1v-1" />
  <path d="M15 11v-1h5v4h-2" />
  <path d="M5 18h5v4h-5z" />
  <path d="M5 10h5v4h-5z" />
  <path d="M10 12h2" />
  <path d="M7.5 7.5v2.5" />
  <path d="M7.5 14v4" />
  <path d="M3 3l18 18" />
</svg>
