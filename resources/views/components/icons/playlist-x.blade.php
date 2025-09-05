<!--
category: Media
tags: [off, delete, remove]
version: "1.53"
unicode: "f009"
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
  <path d="M19 8h-14" />
  <path d="M5 12h7" />
  <path d="M12 16h-7" />
  <path d="M16 14l4 4" />
  <path d="M20 14l-4 4" />
</svg>
