<!--
tags: [bathroom, hygiene, wc, cleaning, rubbing]
version: "1.50"
unicode: "efd3"
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
  <path d="M6 10m-3 0a3 7 0 1 0 6 0a3 7 0 1 0 -6 0" />
  <path d="M21 10c0 -3.866 -1.343 -7 -3 -7" />
  <path d="M6 3h12" />
  <path d="M21 10v10l-3 -1l-3 2l-3 -3l-3 2v-10" />
  <path d="M6 10h.01" />
</svg>
