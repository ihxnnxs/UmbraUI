<!--
category: Map
tags: [stop, halt, terminate, void, invalidate, abort, end, cease, prevent, reject]
version: "2.10"
unicode: "f9da"
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
  <path d="M21 12a9 9 0 1 0 -8.985 9" />
  <path d="M3.6 9h16.8" />
  <path d="M3.6 15h9.9" />
  <path d="M11.5 3a17 17 0 0 0 0 18" />
  <path d="M12.5 3a16.991 16.991 0 0 1 2.53 10.275" />
  <path d="M19 19m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M17 21l4 -4" />
</svg>
