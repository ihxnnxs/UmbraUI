@php
    $isInvalid = $attributes->has('aria-invalid') || $attributes->has('aria-describedby');
    $borderClass = $isInvalid ? 'border-red-300 focus:ring-red-600 dark:border-red-700 dark:focus:ring-red-400' : 'border-neutral-300 focus:ring-neutral-600 dark:border-neutral-700 dark:focus:ring-neutral-400';
@endphp

<input {{ $attributes->merge([
    'type' => 'radio',
    'class' => 'w-4 h-4 border-2 focus:outline-none focus:ring-2 focus:ring-offset-1 accent-neutral-900 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed dark:bg-neutral-950 dark:accent-neutral-50 ' . $borderClass
]) }} />