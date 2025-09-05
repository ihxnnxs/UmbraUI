<!--
tags: [biology, molecule, chemistry, human, laboratory]
version: "1.58"
unicode: "f05f"
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
  <path d="M8 4l-4 2v5l4 2l4 -2v-5z" />
  <path d="M12 11l4 2l4 -2v-5l-4 -2l-4 2" />
  <path d="M8 13v5l4 2l4 -2v-5" />
</svg>
