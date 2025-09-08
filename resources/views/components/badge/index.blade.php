@php
$variant = $attributes->get('variant', 'default');
$size = $attributes->get('size', 'md');

$variants = [
    'default' => [
        'bg' => 'bg-neutral-100 dark:bg-neutral-800',
        'text' => 'text-neutral-900 dark:text-neutral-50',
        'border' => 'border-transparent'
    ],
    'primary' => [
        'bg' => 'bg-neutral-900 dark:bg-neutral-50',
        'text' => 'text-neutral-50 dark:text-neutral-900',
        'border' => 'border-transparent'
    ],
    'success' => [
        'bg' => 'bg-emerald-100 dark:bg-emerald-900',
        'text' => 'text-emerald-800 dark:text-emerald-100',
        'border' => 'border-transparent'
    ],
    'error' => [
        'bg' => 'bg-red-100 dark:bg-red-900',
        'text' => 'text-red-800 dark:text-red-100',
        'border' => 'border-transparent'
    ],
    'warning' => [
        'bg' => 'bg-amber-100 dark:bg-amber-900',
        'text' => 'text-amber-800 dark:text-amber-100',
        'border' => 'border-transparent'
    ],
    'info' => [
        'bg' => 'bg-blue-100 dark:bg-blue-900',
        'text' => 'text-blue-800 dark:text-blue-100',
        'border' => 'border-transparent'
    ]
];

$sizes = [
    'sm' => 'px-2 py-0.5 text-xs',
    'md' => 'px-2.5 py-1 text-sm',
    'lg' => 'px-3 py-1.5 text-base'
];

$variantClasses = $variants[$variant] ?? $variants['default'];
$sizeClasses = $sizes[$size] ?? $sizes['md'];

$dot = $attributes->get('dot', false);
$removable = $attributes->get('removable', false);
@endphp

<span {{ $attributes->except(['variant', 'size', 'dot', 'removable'])->merge(['class' => 'inline-flex items-center font-medium rounded-full ' . $variantClasses['bg'] . ' ' . $variantClasses['text'] . ' ' . $variantClasses['border'] . ' ' . $sizeClasses]) }}>@if($dot)<svg class="{{ $size === 'sm' ? 'w-1.5 h-1.5 mr-1' : ($size === 'lg' ? 'w-2.5 h-2.5 mr-2' : 'w-2 h-2 mr-1.5') }} fill-current" viewBox="0 0 8 8"><circle cx="4" cy="4" r="3" /></svg>@endif{{ $slot }}@if($removable)<button type="button" aria-label="Remove" class="{{ $size === 'sm' ? 'ml-1 w-3 h-3' : ($size === 'lg' ? 'ml-2 w-4 h-4' : 'ml-1.5 w-3.5 h-3.5') }} rounded-full hover:bg-black/10 dark:hover:bg-white/10 focus:outline-none focus:ring-1 focus:ring-current transition-colors" onclick="this.closest('span').remove()"><svg class="w-full h-full" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg></button>@endif</span>
