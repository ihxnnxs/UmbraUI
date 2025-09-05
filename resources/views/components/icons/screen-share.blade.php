<!--
category: Devices
tags: [monitor, stream, tv, mirroring, cast, online]
version: "1.24"
unicode: "ed18"
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
  <path d="M21 12v3a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h9" />
  <path d="M7 20l10 0" />
  <path d="M9 16l0 4" />
  <path d="M15 16l0 4" />
  <path d="M17 4h4v4" />
  <path d="M16 9l5 -5" />
</svg>
