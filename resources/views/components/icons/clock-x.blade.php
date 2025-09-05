<!--
category: System
tags: [close, delete, remove, stop, terminate, cancel, end, reject, deny, halt]
version: "2.8"
unicode: "f7cb"
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
  <path d="M20.926 13.15a9 9 0 1 0 -7.835 7.784" />
  <path d="M12 7v5l2 2" />
  <path d="M22 22l-5 -5" />
  <path d="M17 22l5 -5" />
</svg>
