@php
    // Placement map (panel positioning only)
    $placement = $attributes->get('placement', 'top');
    $placements = [
        'top' => 'bottom-full left-1/2 -translate-x-1/2 mb-2',
        'top-start' => 'bottom-full left-0 mb-2',
        'top-end' => 'bottom-full right-0 mb-2',

        'bottom' => 'top-full left-1/2 -translate-x-1/2 mt-2',
        'bottom-start' => 'top-full left-0 mt-2',
        'bottom-end' => 'top-full right-0 mt-2',

        'left' => 'right-full top-1/2 -translate-y-1/2 mr-2',
        'left-start' => 'right-full top-0 mr-2',
        'left-end' => 'right-full bottom-0 mr-2',

        'right' => 'left-full top-1/2 -translate-y-1/2 ml-2',
        'right-start' => 'left-full top-0 ml-2',
        'right-end' => 'left-full bottom-0 ml-2',
    ];

    $panelClass = $placements[$placement] ?? $placements['top'];

    $openDelay = (int) $attributes->get('open-delay', 150);
    $closeDelay = (int) $attributes->get('close-delay', 120);
    $tooltipId = 'tooltip-'.uniqid();
@endphp

<div class="relative inline-block"
     x-data="{
        open: false,
        id: '{{ $tooltipId }}',
        openTimer: null,
        closeTimer: null,
        openDelay: {{ $openDelay }},
        closeDelay: {{ $closeDelay }},
        scheduleOpen() {
            clearTimeout(this.closeTimer);
            this.openTimer = setTimeout(() => { this.open = true; }, this.openDelay);
        },
        scheduleClose() {
            clearTimeout(this.openTimer);
            this.closeTimer = setTimeout(() => this.open = false, this.closeDelay);
        }
     }"
     @mouseenter="scheduleOpen()"
     @mouseleave="scheduleClose()"
>
    <!-- Trigger wrapper: focus/hover open; blur/leave close -->
    <span
        class="inline-flex"
        x-bind:aria-describedby="open ? id : null"
        @focusin="scheduleOpen()"
        @focusout="scheduleClose()"
        tabindex="0"
    >
        @isset($trigger)
            {{ $trigger }}
        @else
            <span class="underline decoration-dotted cursor-help text-neutral-700 dark:text-neutral-300">Tooltip</span>
        @endisset
    </span>

    <!-- Tooltip panel -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        id="{{ $tooltipId }}"
        role="tooltip"
        class="absolute z-[60] {{ $panelClass }} inline-block whitespace-nowrap text-sm leading-5 px-3 py-2 rounded-md bg-white dark:bg-neutral-950 border border-neutral-200 dark:border-neutral-800 text-neutral-700 dark:text-neutral-200 shadow-sm dark:shadow-neutral-900/10"
        style="display: none;"
    >
        {{ $slot->isNotEmpty() ? $slot : ($attributes->get('text') ?? 'Tooltip') }}
    </div>
</div>
