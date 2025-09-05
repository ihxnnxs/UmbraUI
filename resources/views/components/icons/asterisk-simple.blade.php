<!--
tags: [star, password, security]
category: Text
version: "1.51"
unicode: "efd4"
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
  <path d="M12 12v-9" />
  <path d="M12 12l-9 -2.5" />
  <path d="M12 12l9 -2.5" />
  <path d="M12 12l6 8.5" />
  <path d="M12 12l-6 8.5" />
</svg>
