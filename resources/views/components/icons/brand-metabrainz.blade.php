<!--
tags: [website, database, open-source, musicbrainz, listenbrainz, bookbrainz, critiquebrainz]
category: Brand
unicode: "ff12"
version: "3.7"
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
  <path d="M3 7v10l7 4v-18z" />
  <path d="M21 7v10l-7 4v-18z" />
</svg>
