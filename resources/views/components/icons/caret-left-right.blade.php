<!--
tags: [arrow-horizontal, double-arrow, side-arrow, left-right, horizontal-pointer, directional, horizontal-caret, bidirectional, opposite, horizontal-arrow]
version: "2.31"
unicode: "fc43"
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
  <path d="M14 18l6 -6l-6 -6v12" />
  <path d="M10 18l-6 -6l6 -6v12" />
</svg>
