@php
    $isDisabled = $attributes->has('disabled');
@endphp
<button {{ $attributes->merge([
    'type' => 'button',
    'aria-disabled' => $isDisabled ? 'true' : null,
    'class' => 'inline-flex items-center justify-center bg-neutral-900 hover:bg-neutral-800 text-neutral-50 px-4 py-2 rounded-lg font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-neutral-600 focus:ring-offset-2 active:scale-[0.98] disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-neutral-900 dark:bg-neutral-50 dark:hover:bg-neutral-100 dark:text-neutral-950 dark:focus:ring-neutral-300 dark:focus:ring-offset-2 dark:ring-offset-neutral-950 dark:disabled:hover:bg-neutral-50'
]) }}>
    {{ $slot ?? 'Button' }}
</button>
