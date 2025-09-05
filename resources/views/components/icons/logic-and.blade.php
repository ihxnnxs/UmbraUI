<!--
tags: [gate, technology, electirical, it]
category: Logic
version: "1.74"
unicode: "f240"
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
  <path d="M22 12h-5" />
  <path d="M2 9h5" />
  <path d="M2 15h5" />
  <path d="M9 5c6 0 8 3.5 8 7s-2 7 -8 7h-2v-14h2z" />
</svg>
