<!--
tags: [premium, exclusive, staff, expensive]
unicode: "f43a"
version: "1.94"
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
  <path d="M3 5h2m4 0h12" />
  <path d="M3 19h16" />
  <path d="M4 9l2 6h1l2 -6" />
  <path d="M12 12v3" />
  <path d="M16 12v-3h2a2 2 0 1 1 0 4h-1" />
  <path d="M3 3l18 18" />
</svg>
