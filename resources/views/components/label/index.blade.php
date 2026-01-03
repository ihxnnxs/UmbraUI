@php
    $clickable = $attributes->get('clickable', true);
    $baseClasses = cn(
        'text-sm font-medium leading-none',
        'peer-disabled:cursor-not-allowed peer-disabled:opacity-70',
        $clickable ? 'cursor-pointer' : ''
    );
@endphp

@if($clickable)
<label {{ $attributes
    ->except(['clickable'])
    ->class(cn($baseClasses, $attributes->get('class')))
}}>{{ $slot }}</label>
@else
<span {{ $attributes
    ->except(['clickable'])
    ->class(cn($baseClasses, $attributes->get('class')))
}}>{{ $slot }}</span>
@endif
