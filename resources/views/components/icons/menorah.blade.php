<!--
tags: [judaism, religion, cultures, jewish]
category: Symbols
unicode: "f58c"
version: "1.109"
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
  <path d="M12 4v16" />
  <path d="M8 4v2a4 4 0 1 0 8 0v-2" />
  <path d="M4 4v2a8 8 0 1 0 16 0v-2" />
  <path d="M10 20h4" />
</svg>
