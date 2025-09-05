<!--
category: Photography
tags: [hole, opening, vent]
version: "1.2"
unicode: "eb58"
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
  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
  <path d="M3.6 15h10.55" />
  <path d="M6.551 4.938l3.26 10.034" />
  <path d="M17.032 4.636l-8.535 6.201" />
  <path d="M20.559 14.51l-8.535 -6.201" />
  <path d="M12.257 20.916l3.261 -10.034" />
</svg>
