<!--
tags: [money, nano, crypto, blockchain, pay, p2p, digital]
category: Currencies
version: "2.6"
unicode: "f7a6"
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
  <path d="M7 20l10 -16" />
  <path d="M7 12h10" />
  <path d="M7 16h10" />
  <path d="M17 20l-10 -16" />
</svg>
