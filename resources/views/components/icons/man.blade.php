<!--
tags: [guy, boy, male, gender]
version: "1.0"
unicode: "eae6"
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
  <path d="M10 16v5" />
  <path d="M14 16v5" />
  <path d="M9 9h6l-1 7h-4z" />
  <path d="M5 11c1.333 -1.333 2.667 -2 4 -2" />
  <path d="M19 11c-1.333 -1.333 -2.667 -2 -4 -2" />
  <path d="M12 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
</svg>
