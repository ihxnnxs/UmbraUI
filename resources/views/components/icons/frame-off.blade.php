<!--
category: Design
tags: [borderless, outlineless, no-border, unframed, unbordered, bare, naked, borderless-frame, no-outline, remove-frame, crop]
version: "1.66"
unicode: "f135"
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
  <path d="M4 7h3m4 0h9" />
  <path d="M4 17h13" />
  <path d="M7 7v13" />
  <path d="M17 4v9m0 4v3" />
  <path d="M3 3l18 18" />
</svg>
