@php
    $isDisabled = $attributes->has('disabled');
    $variant = $attributes->get('variant', 'default');

    $variants = [
        'default' => 'bg-primary text-primary-foreground hover:bg-primary/90',
        'destructive' => 'bg-destructive text-destructive-foreground hover:bg-destructive/90',
        'outline' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
        'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
        'ghost' => 'hover:bg-accent hover:text-accent-foreground',
        'link' => 'text-primary underline-offset-4 hover:underline',
    ];

    $baseClasses = cn(
        'inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
        'disabled:pointer-events-none disabled:opacity-50',
        'px-4 py-2',
        $variants[$variant] ?? $variants['default']
    );
@endphp
<button {{ $attributes
    ->except(['variant'])
    ->merge([
        'type' => 'button',
        'aria-disabled' => $isDisabled ? 'true' : null,
    ])
    ->class(cn($baseClasses, $attributes->get('class')))
}}>
    {{ $slot ?? 'Button' }}
</button>
