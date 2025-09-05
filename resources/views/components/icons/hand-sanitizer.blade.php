<!--
tags: [hygiene, gel, alcohol, wash, virus]
unicode: "f5f4"
version: "1.113"
category: Health
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
  <path d="M7 21h10v-10a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v10z" />
  <path d="M15 3h-6a2 2 0 0 0 -2 2" />
  <path d="M12 3v5" />
  <path d="M12 11v4" />
  <path d="M10 13h4" />
</svg>
