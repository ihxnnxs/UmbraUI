<!--
category: Arrows
tags: [refresh, synchronization, reload, restart, spinner, loader, ajax, update, arrows]
version: "1.4"
unicode: "ebb5"
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
  <path d="M9 4.55a8 8 0 0 1 6 14.9m0 -4.45v5h5" />
  <path d="M5.63 7.16l0 .01" />
  <path d="M4.06 11l0 .01" />
  <path d="M4.63 15.1l0 .01" />
  <path d="M7.16 18.37l0 .01" />
  <path d="M11 19.94l0 .01" />
</svg>
