<!--
tags: [select, cursor]
version: "1.5"
unicode: "ebbc"
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
  <path d="M3 12l3 0" />
  <path d="M12 3l0 3" />
  <path d="M7.8 7.8l-2.2 -2.2" />
  <path d="M16.2 7.8l2.2 -2.2" />
  <path d="M7.8 16.2l-2.2 2.2" />
  <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
</svg>
