<!--
tags: [development, new, technologies, developers]
category: Brand
version: "2.7"
unicode: "f7b0"
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
  <path d="M2 12l10 7.422l10 -7.422" />
  <path d="M7 9l5 4l5 -4" />
  <path d="M11 6l1 .8l1 -.8l-1 -.8z" />
</svg>
