<!--
tags: [automated, create, app, buissnes]
category: Brand
unicode: "f49f"
version: "1.96"
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
  <path d="M3 12h6" />
  <path d="M21 12h-6" />
  <path d="M12 3v6" />
  <path d="M12 15v6" />
  <path d="M5.636 5.636l4.243 4.243" />
  <path d="M18.364 18.364l-4.243 -4.243" />
  <path d="M18.364 5.636l-4.243 4.243" />
  <path d="M9.879 14.121l-4.243 4.243" />
</svg>
