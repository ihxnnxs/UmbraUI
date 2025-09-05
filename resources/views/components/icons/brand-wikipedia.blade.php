<!--
tags: [encyclopedia, information, knowledge, online, resource, articles, community, edit, content, support]
category: Brand
version: "2.18"
unicode: "fa79"
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
  <path d="M3 4.984h2" />
  <path d="M8 4.984h2.5" />
  <path d="M14.5 4.984h2.5" />
  <path d="M22 4.984h-2" />
  <path d="M4 4.984l5.455 14.516l6.545 -14.516" />
  <path d="M9 4.984l6 14.516l6 -14.516" />
</svg>
