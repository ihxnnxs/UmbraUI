@php
// Dropdown positioning configuration
$position = $attributes->get('position', 'bottom-left');
$positionClasses = [
    'bottom-left' => 'top-full left-0',
    'bottom-right' => 'top-full right-0', 
    'top-left' => 'bottom-full left-0',
    'top-right' => 'bottom-full right-0',
];
$positionClass = $positionClasses[$position] ?? $positionClasses['bottom-left'];

// Generate unique ID for accessibility
$dropdownId = 'dropdown-' . uniqid();
@endphp

<div
    class="relative inline-block"
    x-data="{
        open: false,
        focusedIndex: -1,
        close() {
            this.open = false;
            this.focusedIndex = -1;
        },
        focusNext() {
            const items = this.$refs.menu.querySelectorAll('[role=menuitem]:not([aria-disabled=true])');
            this.focusedIndex = this.focusedIndex < items.length - 1 ? this.focusedIndex + 1 : 0;
            items[this.focusedIndex]?.focus();
        },
        focusPrevious() {
            const items = this.$refs.menu.querySelectorAll('[role=menuitem]:not([aria-disabled=true])');
            this.focusedIndex = this.focusedIndex > 0 ? this.focusedIndex - 1 : items.length - 1;
            items[this.focusedIndex]?.focus();
        }
    }"
    @click.away="close()"
    @keydown.escape="close()"
    @keydown.arrow-down.prevent="open ? focusNext() : (open = true, $nextTick(() => focusNext()))"
    @keydown.arrow-up.prevent="open ? focusPrevious() : (open = true, $nextTick(() => focusPrevious()))"
>
    <!-- Trigger Button -->
    <x-umbra::button
        @click="open = !open"
        {{ $attributes->except(['position']) }}
        class="gap-2"
        x-bind:aria-expanded="open"
        aria-haspopup="true"
        aria-controls="{{ $dropdownId }}"
    >
        @isset($trigger)
            {{ $trigger }}
        @else
            Dropdown
        @endisset

        <!-- Chevron Icon -->
        <svg
            class="w-4 h-4 transition-transform duration-200 text-neutral-300 dark:text-neutral-600"
            x-bind:class="{ 'rotate-180': open }"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            aria-hidden="true"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </x-umbra::button>

    <!-- Dropdown Menu -->
    <div
        x-show="open"
        x-cloak
        x-ref="menu"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        id="{{ $dropdownId }}"
        class="absolute {{ $positionClass }} z-50 mt-2 min-w-[200px] bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-lg shadow-lg py-2"
        role="menu"
        aria-orientation="vertical"
        @click="close()"
        @keydown.home.prevent="focusedIndex = 0; $refs.menu.querySelectorAll('[role=menuitem]:not([aria-disabled=true])')[0]?.focus()"
        @keydown.end.prevent="focusedIndex = $refs.menu.querySelectorAll('[role=menuitem]:not([aria-disabled=true])').length - 1; $refs.menu.querySelectorAll('[role=menuitem]:not([aria-disabled=true])')[$refs.menu.querySelectorAll('[role=menuitem]:not([aria-disabled=true])').length - 1]?.focus()"
        x-trap.inert.noscroll="open"
    >
        {{ $slot }}
    </div>
</div>
