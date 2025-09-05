<!--
tags: [microsoft, azure, cloud, computing, technology, services, software, platform, it, digital]
category: Brand
version: "2.16"
unicode: "fa4d"
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
  <path d="M6 7.5l-4 9.5h4l6 -15z" />
  <path d="M22 20l-7 -15l-3 7l4 5l-8 3z" />
</svg>
