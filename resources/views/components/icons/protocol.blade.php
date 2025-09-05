<!--
tags: [procedure, system, method, guideline, rule, standard, framework, process, format, structure]
version: "2.45"
unicode: "fd81"
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
  <path d="M15 6l-7 12" />
  <path d="M20 6l-7 12" />
  <path d="M5 14v.015" />
  <path d="M5 10.015v.015" />
</svg>
