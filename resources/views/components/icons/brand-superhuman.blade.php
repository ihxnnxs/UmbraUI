<!--
tags: [software, email, productivity, tools]
category: Brand
version: "1.102"
unicode: "f50c"
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
  <path d="M16 12l4 3l-8 7l-8 -7l4 -3" />
  <path d="M12 3l-8 6l8 6l8 -6z" />
  <path d="M12 15h8" />
</svg>
