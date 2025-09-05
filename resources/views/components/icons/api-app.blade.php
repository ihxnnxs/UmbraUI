<!--
tags: [development, software, developer, platform]
version: "1.53"
unicode: "effc"
category: Development
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
  <path d="M12 15h-6.5a2.5 2.5 0 1 1 0 -5h.5" />
  <path d="M15 12v6.5a2.5 2.5 0 1 1 -5 0v-.5" />
  <path d="M12 9h6.5a2.5 2.5 0 1 1 0 5h-.5" />
  <path d="M9 12v-6.5a2.5 2.5 0 0 1 5 0v.5" />
</svg>
