@php
// Submenu positioning configuration
$position = $attributes->get('position', 'right-top');
$positionClasses = [
    'right-top' => 'left-full top-0',
    'right-bottom' => 'left-full bottom-0',
    'left-top' => 'right-full top-0', 
    'left-bottom' => 'right-full bottom-0',
];
$positionClass = $positionClasses[$position] ?? $positionClasses['right-top'];

// Generate unique IDs for accessibility
$submenuId = 'submenu-' . uniqid();
$triggerId = 'submenu-trigger-' . uniqid();
@endphp

<div 
    class="relative group/submenu" 
    x-data="{ 
        submenuOpen: false,
        hoverDelay: null,
        hoverIntent: false,
        show() {
            clearTimeout(this.hoverDelay);
            this.hoverIntent = true;
            this.submenuOpen = true;
        },
        hide() {
            this.hoverIntent = false;
            this.hoverDelay = setTimeout(() => {
                if (!this.hoverIntent) {
                    this.submenuOpen = false;
                }
            }, 400);
        },
        keepOpen() {
            this.hoverIntent = true;
            clearTimeout(this.hoverDelay);
        }
    }"
    @mouseenter="show()"
    @mouseleave="hide()"
    @mousemove.throttle.100ms="keepOpen()"
    @keydown.arrow-right.prevent="submenuOpen = true; $nextTick(() => $refs.submenuFirstItem?.focus())"
    @keydown.arrow-left.prevent="submenuOpen = false; $refs.trigger.focus()"
>
    <!-- Submenu Trigger -->
    <button
        x-ref="trigger"
        type="button"
        id="{{ $triggerId }}"
        {{ $attributes->except(['position'])->merge([
            'class' => 'flex items-center justify-between w-full px-4 py-2 text-sm text-neutral-700 dark:text-neutral-300 hover:bg-neutral-50 dark:hover:bg-neutral-800 focus:bg-neutral-50 dark:focus:bg-neutral-800 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-neutral-500 dark:focus:ring-neutral-400 cursor-pointer',
            'role' => 'menuitem',
            'tabindex' => '-1'
        ]) }}
        x-bind:aria-expanded="submenuOpen"
        aria-haspopup="true"
        aria-controls="{{ $submenuId }}"
    >
        <span class="flex items-center gap-3">
            @isset($icon)
                <span class="flex-shrink-0 w-4 h-4" aria-hidden="true">{{ $icon }}</span>
            @endisset
            <span class="flex-1">
                @isset($trigger)
                    {{ $trigger }}
                @else
                    {{ $label ?? 'Submenu' }}
                @endisset
            </span>
        </span>
        
        <!-- Arrow Icon -->
        <svg 
            class="w-4 h-4 text-neutral-400 transition-transform duration-150" 
            x-bind:class="{ 'rotate-90': submenuOpen }"
            fill="none" 
            stroke="currentColor" 
            viewBox="0 0 24 24"
            aria-hidden="true"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>

    <!-- Submenu -->
    <div
        x-show="submenuOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        id="{{ $submenuId }}"
        class="absolute {{ $positionClass }} z-[60] ml-1 min-w-[180px] bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-lg shadow-lg py-2"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="{{ $triggerId }}"
        style="display: none;"
        @mouseenter="keepOpen()"
        @mouseleave="hide()"
        @click="show()"
        @mousemove.throttle.50ms="keepOpen()"
    >
        {{ $slot }}
    </div>
</div>
