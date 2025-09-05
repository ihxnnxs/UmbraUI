<!--
tags: [connection, link, shape, hyperlink]
unicode: "f4c3"
version: "1.98"
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
  <path d="M9.183 6.117a6 6 0 1 0 4.511 3.986" />
  <path d="M14.813 17.883a6 6 0 1 0 -4.496 -3.954" />
</svg>
