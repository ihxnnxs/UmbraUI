<!--
tags: [identity, non binary]
category: Gender
version: "1.64"
unicode: "f0eb"
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
  <path d="M12 11a5 5 0 1 1 0 10a5 5 0 0 1 0 -10z" />
  <path d="M12 11v-8" />
  <path d="M14.5 4.5l-5 3" />
  <path d="M9.5 4.5l5 3" />
</svg>
