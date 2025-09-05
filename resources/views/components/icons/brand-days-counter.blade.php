<!--
tags: [app, mobile, highlights, days, birthday]
category: Brand
unicode: "f4d2"
version: "1.99"
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
  <path d="M20.779 10.007a9 9 0 1 0 -10.77 10.772" />
  <path d="M13 21h8v-7" />
  <path d="M12 8v4l3 3" />
</svg>
