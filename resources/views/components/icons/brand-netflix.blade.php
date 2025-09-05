<!--
tags: [series, tv, episode, movie, film, media, watch, app, technology]
category: Brand
version: "1.36"
unicode: "edcf"
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
  <path d="M9 3l10 18h-4l-10 -18z" />
  <path d="M5 3v18h4v-10.5" />
  <path d="M19 21v-18h-4v10.5" />
</svg>
