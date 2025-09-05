<!--
tags: [create, app, online, javascript]
category: Brand
unicode: "f34a"
version: "1.88"
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
  <path d="M12.5 8l4 4l-4 4h4.5l4 -4l-4 -4z" />
  <path d="M3.5 8l4 4l-4 4h4.5l4 -4l-4 -4z" />
</svg>
