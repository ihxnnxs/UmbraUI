<!--
tags: [oscar, fifteenth-letter, vowel, open, order, offer, over, octave, occupy, origin]
category: Letters
unicode: "ff71"
version: "3.11"
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
  <path d="M12 8a2 2 0 0 1 2 2v4a2 2 0 1 1 -4 0v-4a2 2 0 0 1 2 -2" />
  <path d="M7.5 4.21v.01" />
  <path d="M4.21 7.5v.01" />
  <path d="M3 12v.01" />
  <path d="M4.21 16.5v.01" />
  <path d="M7.5 19.79v.01" />
  <path d="M12 21v.01" />
  <path d="M16.5 19.79v.01" />
  <path d="M19.79 16.5v.01" />
  <path d="M21 12v.01" />
  <path d="M19.79 7.5v.01" />
  <path d="M16.5 4.21v.01" />
  <path d="M12 3v.01" />
</svg>
