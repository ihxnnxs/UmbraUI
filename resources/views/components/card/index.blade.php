@php
    $baseClasses = cn(
        'rounded-lg border bg-card text-card-foreground shadow-sm',
        'overflow-hidden'
    );
@endphp

<div {{ $attributes->class(cn($baseClasses, $attributes->get('class'))) }}>
    @if(isset($image))
    <div class="w-full overflow-hidden group">
        <div class="transition-transform duration-300 group-hover:scale-105">
            {{ $image }}
        </div>
    </div>
    @endif

    <div class="p-6">
        @if(isset($header))
        <div class="mb-4 pb-4 border-b border-border">
            {{ $header }}
        </div>
        @endif

        <div>
            {{ $slot }}
        </div>

        @if(isset($footer))
        <div class="mt-4 pt-4 border-t border-border">
            {{ $footer }}
        </div>
        @endif
    </div>
</div>