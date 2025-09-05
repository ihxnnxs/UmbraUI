<!--
tags: [girl, female, gender]
version: "1.0"
unicode: "eb53"
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
  <path d="M8 16h8l-2 -7h-4z" />
  <path d="M5 11c1.667 -1.333 3.333 -2 5 -2" />
  <path d="M19 11c-1.667 -1.333 -3.333 -2 -5 -2" />
  <path d="M12 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
</svg>
