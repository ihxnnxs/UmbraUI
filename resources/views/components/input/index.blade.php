@php
    $isInvalid = $attributes->has('aria-invalid') || $attributes->has('aria-describedby');

    $baseClasses = cn(
        'flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm',
        'ring-offset-background placeholder:text-muted-foreground',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
        'disabled:cursor-not-allowed disabled:opacity-50',
        'file:border-0 file:bg-transparent file:text-sm file:font-medium',
        $isInvalid ? 'border-destructive focus-visible:ring-destructive' : ''
    );
@endphp

<input {{ $attributes
    ->merge(['type' => 'text'])
    ->class(cn($baseClasses, $attributes->get('class')))
}}/>
