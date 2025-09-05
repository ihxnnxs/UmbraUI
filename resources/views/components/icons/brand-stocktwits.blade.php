<!--
tags: [finance, investment, stock, trade, market, share, community, tweet, platform, discussion]
category: Brand
version: "2.45"
unicode: "fd78"
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
  <path d="M16 3l-8 4.5l8 4.5" />
  <path d="M8 12l8 4.5l-8 4.5" />
</svg>
