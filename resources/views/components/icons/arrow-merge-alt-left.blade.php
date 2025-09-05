<!--
tags: [merge-left, shift-left, combine-left, direction-left, join-left, move-left, alt-left-arrow, leftward, left-shift, left-merge]
category: Arrows
version: "2.36"
unicode: "fc9f"
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
  <path d="M8 7l4 -4l4 4" />
  <path d="M18 21v.01" />
  <path d="M18 18.01v.01" />
  <path d="M17 15.02v.01" />
  <path d="M14 13.03v.01" />
  <path d="M12 3v5.394a6.737 6.737 0 0 1 -3 5.606a6.737 6.737 0 0 0 -3 5.606v1.394" />
</svg>
