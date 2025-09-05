<!--
tags: [shaver, barber, grooming, beard, moustache]
unicode: "f4b4"
version: "1.97"
category: Health
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
  <path d="M8 3v2" />
  <path d="M12 3v2" />
  <path d="M16 3v2" />
  <path d="M9 12v6a3 3 0 0 0 6 0v-6h-6z" />
  <path d="M8 5h8l-1 4h-6z" />
  <path d="M12 17v1" />
</svg>
