@php
    $isExternal = $attributes->get('target') === '_blank';
    $hasRel = $attributes->has('rel');
@endphp
<a {{ $attributes->merge([
    'class' => 'inline-block text-neutral-900 hover:text-neutral-700 underline underline-offset-4 decoration-2 hover:decoration-neutral-500 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-neutral-600 focus:ring-offset-2 focus:rounded-sm dark:text-neutral-50 dark:hover:text-neutral-300 dark:focus:ring-neutral-300 dark:hover:decoration-neutral-400',
    'rel' => $isExternal && !$hasRel ? 'noopener noreferrer' : null,
]) }}>
    {{ $slot }}
</a>
