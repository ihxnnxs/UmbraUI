<!--
tags: [chf, business, swiss, franc, money, banknote, pay]
category: Currencies
version: "1.39"
unicode: "ee5b"
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
  <path d="M17 5h-6a2 2 0 0 0 -2 2v12" />
  <path d="M7 15h4" />
  <path d="M9 11h7" />
</svg>
