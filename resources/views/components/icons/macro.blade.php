<!--
tags: [video, photography, photo, camera]
category: Photography
version: "1.39"
unicode: "eeab"
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
  <path d="M6 15a6 6 0 1 0 12 0" />
  <path d="M18 15a6 6 0 0 0 -6 6" />
  <path d="M12 21a6 6 0 0 0 -6 -6" />
  <path d="M12 21v-10" />
  <path d="M12 11a5 5 0 0 1 -5 -5v-3l3 2l2 -2l2 2l3 -2v3a5 5 0 0 1 -5 5z" />
</svg>
