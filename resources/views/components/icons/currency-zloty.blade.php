<!--
tags: [poland, pln, zloty, polish, money, banknote, pay]
category: Currencies
version: "1.39"
unicode: "ee6c"
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
  <path d="M12 18h-7l7 -7h-7" />
  <path d="M17 18v-13" />
  <path d="M14 14.5l6 -3.5" />
</svg>
