@php
// Extract component props
$href = $attributes->get('href');
$disabled = $attributes->get('disabled', false);
$destructive = $attributes->get('destructive', false);
$active = $attributes->get('active', false);

// Define base classes for consistency
$baseClasses = 'flex items-center gap-3 px-4 py-2 text-sm transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-neutral-500 dark:focus:ring-neutral-400';

// Compute classes based on state - using array for better maintainability
$stateClasses = [
    'disabled' => 'text-neutral-400 dark:text-neutral-500 cursor-not-allowed',
    'destructive' => 'text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-950/20 focus:bg-red-50 dark:focus:bg-red-950/20 cursor-pointer',
    'active' => 'bg-neutral-100 dark:bg-neutral-800 text-neutral-900 dark:text-neutral-50 cursor-pointer',
    'default' => 'text-neutral-700 dark:text-neutral-300 hover:bg-neutral-50 dark:hover:bg-neutral-800 focus:bg-neutral-50 dark:focus:bg-neutral-800 cursor-pointer'
];

$stateKey = $disabled ? 'disabled' : ($destructive ? 'destructive' : ($active ? 'active' : 'default'));
$classes = $baseClasses . ' ' . $stateClasses[$stateKey];

// Attributes to exclude from merging
$excludedAttrs = ['href', 'disabled', 'destructive', 'active'];
@endphp

@if($href && !$disabled)
    {{-- Link variant --}}
    <a
        href="{{ $href }}"
        {{ $attributes->except($excludedAttrs)->merge([
            'class' => $classes,
            'role' => 'menuitem',
            'tabindex' => '-1'
        ]) }}
        @keydown.enter.prevent="window.location.href = '{{ $href }}'"
        @keydown.space.prevent="window.location.href = '{{ $href }}'"
    >
        @include('umbra-ui::components.dropdown._item-content')
    </a>
@elseif(!$disabled)
    {{-- Button variant --}}
    <button
        {{ $attributes->except($excludedAttrs)->merge([
            'class' => $classes . ' w-full text-left',
            'role' => 'menuitem',
            'tabindex' => '-1',
            'type' => 'button'
        ]) }}
        @click="$el.closest('[x-data]').__x.$data.close()"
    >
        @include('umbra-ui::components.dropdown._item-content')
    </button>
@else
    {{-- Disabled variant --}}
    <div
        {{ $attributes->except($excludedAttrs)->merge([
            'class' => $classes,
            'role' => 'menuitem',
            'tabindex' => '-1',
            'aria-disabled' => 'true'
        ]) }}
    >
        @include('umbra-ui::components.dropdown._item-content')
    </div>
@endif