<!--
tags: [worship, religion, islam, architecture, prayer, dome, minaret, community, faith, sacred]
category: Buildings
version: "2.16"
unicode: "fa57"
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
  <path d="M3 21h7v-2a2 2 0 1 1 4 0v2h7" />
  <path d="M4 21v-10" />
  <path d="M20 21v-10" />
  <path d="M4 16h3v-3h10v3h3" />
  <path d="M17 13a5 5 0 0 0 -10 0" />
  <path d="M21 10.5c0 -.329 -.077 -.653 -.224 -.947l-.776 -1.553l-.776 1.553a2.118 2.118 0 0 0 -.224 .947a.5 .5 0 0 0 .5 .5h1a.5 .5 0 0 0 .5 -.5z" />
  <path d="M5 10.5c0 -.329 -.077 -.653 -.224 -.947l-.776 -1.553l-.776 1.553a2.118 2.118 0 0 0 -.224 .947a.5 .5 0 0 0 .5 .5h1a.5 .5 0 0 0 .5 -.5z" />
  <path d="M12 2a2 2 0 1 0 2 2" />
  <path d="M12 6v2" />
</svg>
