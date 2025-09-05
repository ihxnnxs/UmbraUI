<!--
category: Media
tags: [sound, mp3, album, speakers, melody]
version: "1.66"
unicode: "f166"
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
  <path d="M6 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M14.42 14.45a3 3 0 1 0 4.138 4.119" />
  <path d="M9 17v-8m0 -4v-1h10v11" />
  <path d="M12 8h7" />
  <path d="M3 3l18 18" />
</svg>
