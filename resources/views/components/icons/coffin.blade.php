<!--
tags: [halloween, death, scary, horror, cementry]
unicode: "f579"
version: "1.108"
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
  <path d="M7 3l-2 6l2 12h6l2 -12l-2 -6z" />
  <path d="M10 7v5" />
  <path d="M8 9h4" />
  <path d="M13 21h4l2 -12l-2 -6h-4" />
</svg>
