<!--
category: Computers
tags: [network, disconnect, online, api, down, hook, rest, internet, notlink, failure]
unicode: "100e7"
version: "3.26"
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
  <path d="M7 10a2 2 0 1 0 -4 0v4a2 2 0 1 0 4 0" />
  <path d="M17 13v-5l4 8v-8" />
  <path d="M14 14a2 2 0 1 1 -4 0v-4m2 -2a2 2 0 0 1 2 2" />
  <path d="M3 3l18 18" />
</svg>
