<!--
tags: [word, regex, find]
category: Math
version: "1.69"
unicode: "f1e5"
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
  <path d="M7 4h-4v16h4" />
  <path d="M17 4h4v16h-4" />
  <path d="M8 16h.01" />
  <path d="M12 16h.01" />
  <path d="M16 16h.01" />
</svg>
