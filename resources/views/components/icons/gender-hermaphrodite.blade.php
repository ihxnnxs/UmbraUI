<!--
tags: [identify, intersexuality, hybrid]
category: Gender
version: "1.64"
unicode: "f0ec"
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
  <path d="M12 14v7" />
  <path d="M9 18h6" />
  <path d="M12 6a4 4 0 1 1 0 8a4 4 0 0 1 0 -8z" />
  <path d="M15 3a3 3 0 1 1 -6 0" />
</svg>
