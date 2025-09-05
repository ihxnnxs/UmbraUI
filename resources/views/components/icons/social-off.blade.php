<!--
tags: [society, community, collectivity]
version: "1.67"
unicode: "f1a9"
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
  <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
  <path d="M17.57 17.602a2 2 0 0 0 2.83 2.827" />
  <path d="M11.113 11.133a3 3 0 1 0 3.765 3.715" />
  <path d="M12 7v1" />
  <path d="M6.7 17.8l2.8 -2" />
  <path d="M17.3 17.8l-2.8 -2" />
  <path d="M3 3l18 18" />
</svg>
