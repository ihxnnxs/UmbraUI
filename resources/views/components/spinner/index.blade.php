@php
    $label = $attributes->get('label', 'Loading…');
@endphp
<span role="status" aria-live="polite" class="inline-flex items-center gap-2">
    <span aria-hidden="true">
        <x-dynamic-component
            :component="'umbra::icons.' . $attributes->get('icon', 'loader-2')"
            class="animate-spin"/>
    </span>
    <span class="sr-only">{{ $label }}</span>
</span>
