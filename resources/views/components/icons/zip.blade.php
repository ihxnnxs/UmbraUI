<!--
category: Extensions
tags: [file, document, folder, compress, archive, filetype]
version: "1.93"
unicode: "f3b4"
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
  <path d="M16 16v-8h2a2 2 0 1 1 0 4h-2" />
  <path d="M12 8v8" />
  <path d="M4 8h4l-4 8h4" />
</svg>
