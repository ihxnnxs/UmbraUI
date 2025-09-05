<!--
tags: [sample, color, flask, liquid, container, glass, chemistry, test, laboratory, experimental, beta]
version: "1.61"
unicode: "f0a4"
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
  <path d="M15 3v15a3 3 0 0 1 -6 0v-15" />
  <path d="M9 12h6" />
  <path d="M8 3h8" />
</svg>
