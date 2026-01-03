@php
$variant = $attributes->get('variant', 'default');
$size = $attributes->get('size', 'md');

$variants = [
    'default' => 'border-transparent bg-primary text-primary-foreground shadow hover:bg-primary/80',
    'secondary' => 'border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80',
    'destructive' => 'border-transparent bg-destructive text-destructive-foreground shadow hover:bg-destructive/80',
    'outline' => 'text-foreground',
    'success' => 'border-transparent bg-green-600 text-white shadow hover:bg-green-700 dark:bg-green-500 dark:hover:bg-green-600',
    'warning' => 'border-transparent bg-yellow-600 text-white shadow hover:bg-yellow-700 dark:bg-yellow-500 dark:hover:bg-yellow-600',
    'info' => 'border-transparent bg-blue-600 text-white shadow hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600',
    'error' => 'border-transparent bg-destructive text-destructive-foreground shadow hover:bg-destructive/80',
];

$sizes = [
    'sm' => 'px-2 py-0.5 text-xs',
    'md' => 'px-2.5 py-0.5 text-xs',
    'lg' => 'px-3 py-1 text-sm'
];

$dot = $attributes->get('dot', false);
$removable = $attributes->get('removable', false);

$baseClasses = cn(
    'inline-flex gap-1 items-center rounded-md border font-semibold transition-colors',
    'focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2',
    $variants[$variant] ?? $variants['default'],
    $sizes[$size] ?? $sizes['md']
);
@endphp

<span {{ $attributes
    ->except(['variant', 'size', 'dot', 'removable'])
    ->class(cn($baseClasses, $attributes->get('class')))
}}>
    @if($dot)
    <svg class="{{ $size === 'sm' ? 'w-1.5 h-1.5 mr-1' : ($size === 'lg' ? 'w-2.5 h-2.5 mr-2' : 'w-2 h-2 mr-1.5') }} fill-current" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
    </svg>
    @endif
    {{ $slot }}
    @if($removable)
    <button
        type="button"
        aria-label="Remove"
        class="{{ cn(
            'rounded-full hover:bg-black/10 dark:hover:bg-white/10',
            'focus:outline-none focus:ring-1 focus:ring-current transition-colors',
            $size === 'sm' ? 'ml-1 w-3 h-3' : ($size === 'lg' ? 'ml-2 w-4 h-4' : 'ml-1.5 w-3.5 h-3.5')
        ) }}"
        onclick="this.closest('span').remove()">
        <svg class="w-full h-full" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    @endif
</span>
