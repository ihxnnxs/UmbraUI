<!--
category: Devices
tags: [wifi, device, wireless, signal, station, cast]
unicode: "f424"
version: "1.94"
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
  <path d="M17 13h2a2 2 0 0 1 2 2v2m-.588 3.417c-.362 .36 -.861 .583 -1.412 .583h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2h8" />
  <path d="M17 17v.01" />
  <path d="M13 17v.01" />
  <path d="M12.226 8.2a4 4 0 0 1 6.024 .55" />
  <path d="M9.445 5.407a8 8 0 0 1 12.055 1.093" />
  <path d="M3 3l18 18" />
</svg>
