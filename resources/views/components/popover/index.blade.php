@php
    // Placement options: top, bottom, left, right with -start/-end alignment
    $placement = $attributes->get('placement', 'bottom');
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

    $placementClass = $placements[$placement] ?? $placements['bottom'];

    $popoverId = 'popover-'.uniqid();
    $triggerMode = $attributes->get('trigger', 'click'); // click | hover
@endphp

<div class="relative inline-block"
     x-data="{ open: false, id: '{{ $popoverId }}', mode: '{{ $triggerMode }}', hoverTimer: null }"
     @keydown.escape.window="open = false"
     @click.outside="open = false"
     @mouseenter="if (mode==='hover') { clearTimeout(hoverTimer); open = true }"
     @mouseleave="if (mode==='hover') { hoverTimer = setTimeout(() => open = false, 120) }"
>
    <!-- Trigger -->
    <div @click="if (mode==='click') { open = !open }" x-bind:aria-controls="id" x-bind:aria-expanded="open" aria-haspopup="dialog">
        @isset($trigger)
            {{ $trigger }}
        @else
            <x-umbra::button>Open Popover</x-umbra::button>
        @endisset
    </div>

    <!-- Panel -->
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        id="{{ $popoverId }}"
        role="dialog"
        aria-modal="false"
        class="absolute z-50 {{ $placementClass }} w-max min-w-[14rem] max-w-[32rem] whitespace-normal break-words text-sm leading-6 bg-white dark:bg-neutral-950 border border-neutral-200 dark:border-neutral-800 rounded-lg shadow-md dark:shadow-neutral-900/10"
        x-trap.inert.noscroll="open"
    >
        <!-- Header -->
        @isset($header)
            <div class="px-3 py-2 border-b border-neutral-200 dark:border-neutral-800 rounded-t-lg bg-neutral-50 dark:bg-neutral-900/40">
                <h3 class="font-semibold text-neutral-900 dark:text-neutral-50">{{ $header }}</h3>
            </div>
        @endisset

        <!-- Body -->
        <div class="px-3 py-2 text-neutral-600 dark:text-neutral-300">
            {{ $slot }}
        </div>

        @isset($footer)
            <div class="px-3 py-2 border-t border-neutral-200 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-800/40 rounded-b-lg">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>
