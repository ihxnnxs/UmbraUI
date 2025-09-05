<!--
tags: [forum, make, question, answers, website]
category: Brand
unicode: "f60a"
version: "1.114"
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
  <path d="M14 6h6v12h-2l-2 2l-1 -2h-1z" />
  <path d="M4 12h6.5" />
  <path d="M10.5 6h-5" />
  <path d="M6 4c-.5 2.5 -1.5 3.5 -2.5 4.5" />
  <path d="M8 6v7c0 4.5 -2 5.5 -4 7" />
  <path d="M11 18l-3 -5" />
</svg>
