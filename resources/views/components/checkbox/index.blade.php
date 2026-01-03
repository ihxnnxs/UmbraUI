@php
    $isInvalid = $attributes->has('aria-invalid') || $attributes->has('aria-describedby');

    $baseClasses = cn(
        'h-4 w-4 rounded border border-primary',
        'ring-offset-background',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
        'disabled:cursor-not-allowed disabled:opacity-50',
        'data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground',
        $isInvalid ? 'border-destructive focus-visible:ring-destructive' : ''
    );
@endphp

<input {{ $attributes
    ->merge(['type' => 'checkbox'])
    ->class(cn($baseClasses, $attributes->get('class')))
}} />