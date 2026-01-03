@php
    $isExternal = $attributes->get('target') === '_blank';
    $hasRel = $attributes->has('rel');
@endphp
<a {{ $attributes->merge([
    'class' => 'inline-block text-primary hover:text-primary/80 underline underline-offset-4 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 focus:rounded-sm',
    'rel' => $isExternal && !$hasRel ? 'noopener noreferrer' : null,
]) }}>
    {{ $slot }}
</a>
