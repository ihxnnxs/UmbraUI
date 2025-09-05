<!--
tags: [table, column, data-table, spreadsheet, table-structure, columnar, information, grid, table-columnar, dataset]
category: Database
version: "2.24"
unicode: "faff"
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
  <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
  <path d="M10 10h11" />
  <path d="M10 3v18" />
  <path d="M9 3l-6 6" />
  <path d="M10 7l-7 7" />
  <path d="M10 12l-7 7" />
  <path d="M10 17l-4 4" />
</svg>
