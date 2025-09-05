<!--
tags: [child, infant, cradle, pram]
version: "1.58"
unicode: "f05d"
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
  <path d="M8 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M18 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M2 5h2.5l1.632 4.897a6 6 0 0 0 5.693 4.103h2.675a5.5 5.5 0 0 0 0 -11h-.5v6" />
  <path d="M6 9h14" />
  <path d="M9 17l1 -3" />
  <path d="M16 14l1 3" />
</svg>
