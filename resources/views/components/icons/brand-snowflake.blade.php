<!--
tags: [data, cloud, platform, website]
category: Brand
unicode: "f615"
version: "1.115"
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
  <path d="M14 21v-5.5l4.5 2.5" />
  <path d="M10 21v-5.5l-4.5 2.5" />
  <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
  <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
  <path d="M10 3v5.5l-4.5 -2.5" />
  <path d="M14 3v5.5l4.5 -2.5" />
  <path d="M12 11l1 1l-1 1l-1 -1z" />
</svg>
