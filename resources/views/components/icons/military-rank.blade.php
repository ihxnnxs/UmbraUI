<!--
tags: [soldier, army, private, private second class, private first class, specialist, corporal, sergeant, staff sergeant]
version: "1.50"
unicode: "efcf"
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
  <path d="M18 7v12a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-12l6 -4z" />
  <path d="M10 13l2 -1l2 1" />
  <path d="M10 17l2 -1l2 1" />
  <path d="M10 9l2 -1l2 1" />
</svg>
