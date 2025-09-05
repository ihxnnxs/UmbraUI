<!--
category: Map
tags: [verify, approve, confirm, validate, correct, ensure, certify, global, accept]
version: "2.10"
unicode: "f9db"
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
  <path d="M20.946 12.99a9 9 0 1 0 -9.46 7.995" />
  <path d="M3.6 9h16.8" />
  <path d="M3.6 15h13.9" />
  <path d="M11.5 3a17 17 0 0 0 0 18" />
  <path d="M12.5 3a16.997 16.997 0 0 1 2.311 12.001" />
  <path d="M15 19l2 2l4 -4" />
</svg>
