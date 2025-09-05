<!--
category: Arrows
tags: [arrow, move, toggle]
version: "1.30"
unicode: "ed54"
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
  <path d="M12 11v8l3 -3m-6 0l3 3" />
  <path d="M9 7l1 0" />
  <path d="M14 7l1 0" />
  <path d="M19 7l1 0" />
  <path d="M4 7l1 0" />
</svg>
