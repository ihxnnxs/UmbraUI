@php
    $isInvalid = $attributes->has('aria-invalid') || $attributes->has('aria-describedby');
    $borderClass = $isInvalid ? 'border-red-300 focus:ring-red-600 focus:border-red-600 dark:border-red-700 dark:focus:ring-red-400 dark:focus:border-red-400' : 'border-neutral-300 focus:ring-neutral-600 focus:border-transparent dark:border-neutral-700 dark:focus:ring-neutral-400 dark:focus:border-neutral-400';
@endphp

<input {{ $attributes->merge([
    'type' => 'text',
    'class' => 'px-3 py-2 border-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-1 transition-all duration-200 w-full disabled:opacity-50 disabled:cursor-not-allowed dark:bg-neutral-950 dark:text-neutral-50 dark:placeholder-neutral-500 ' . $borderClass
]) }}/>
