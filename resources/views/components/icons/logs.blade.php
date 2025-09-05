<!--
category: Development
tags: [records, history, entries, journal, document, notebook, archive, chronicle, report, data]
unicode: "fea7"
version: "3.1"
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
  <path d="M4 12h.01" />
  <path d="M4 6h.01" />
  <path d="M4 18h.01" />
  <path d="M8 18h2" />
  <path d="M8 12h2" />
  <path d="M8 6h2" />
  <path d="M14 6h6" />
  <path d="M14 12h6" />
  <path d="M14 18h6" />
</svg>
