<!--
tags: [photo, snapshot, visual, frame, layer, embed, nest, overlay, merge, media]
version: "2.47"
unicode: "fd9f"
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
  <path d="M13 15c-2 0 -5 1 -5 5" />
  <path d="M4 11m0 2a2 2 0 0 1 2 -2h5a2 2 0 0 1 2 2v5a2 2 0 0 1 -2 2h-5a2 2 0 0 1 -2 -2z" />
  <path d="M4 7v-2a1 1 0 0 1 1 -1h2" />
  <path d="M11 4h2" />
  <path d="M17 4h2a1 1 0 0 1 1 1v2" />
  <path d="M20 11v2" />
  <path d="M20 17v2a1 1 0 0 1 -1 1h-2" />
</svg>
