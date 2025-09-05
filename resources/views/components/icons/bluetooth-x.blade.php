<!--
category: Devices
tags: [multimedia, technology, disabled, connection, communication]
version: "1.60"
unicode: "f081"
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
  <path d="M7 8l10 8l-5 4v-16l1 .802m0 6.396l-6 4.802" />
  <path d="M16 6l4 4" />
  <path d="M20 6l-4 4" />
</svg>
