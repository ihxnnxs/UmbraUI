@php
    $isInvalid = $attributes->has('aria-invalid') || $attributes->has('aria-describedby');

    $baseClasses = cn(
        'flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm',
        'ring-offset-background placeholder:text-muted-foreground',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
        'disabled:cursor-not-allowed disabled:opacity-50',
        'resize-y',
        $isInvalid ? 'border-destructive focus-visible:ring-destructive' : ''
    );
@endphp

<textarea {{ $attributes
    ->merge(['rows' => '4'])
    ->class(cn($baseClasses, $attributes->get('class')))
}}>{{ $slot }}</textarea>
