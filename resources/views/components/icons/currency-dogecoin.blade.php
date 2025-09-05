<!--
tags: [crypto, bitcoin, lightning network, mining, digital, blockchain, p2p, peer, money, banknote, pay]
category: Currencies
version: "1.43"
unicode: "ef4b"
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
  <path d="M6 12h6" />
  <path d="M9 6v12" />
  <path d="M6 18h6a6 6 0 1 0 0 -12h-6" />
</svg>
