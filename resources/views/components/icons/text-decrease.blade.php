<!--
tags: [indent, minimalize, smaller, editor, size, edit]
category: Text
version: "1.70"
unicode: "f202"
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
  <path d="M4 19v-10.5a3.5 3.5 0 1 1 7 0v10.5" />
  <path d="M4 13h7" />
  <path d="M21 12h-6" />
</svg>
