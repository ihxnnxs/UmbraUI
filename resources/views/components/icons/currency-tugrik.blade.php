<!--
tags: [tgrg, mnt, tugrik, mongolian, money, banknote, pay]
category: Currencies
version: "1.39"
unicode: "ee6a"
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
  <path d="M7 6h10" />
  <path d="M12 6v13" />
  <path d="M8 17l8 -3" />
  <path d="M16 10l-8 3" />
</svg>
