@props([
    'show' => false,
    'maxWidth' => 'md',
    'title' => 'Modal'
])

@php
    $titleId = 'modal-title-' . uniqid();
    $contentId = 'modal-content-' . uniqid();

    $maxWidthClasses = [
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
        '3xl' => 'max-w-3xl',
    ];

    $maxWidthClass = $maxWidthClasses[$maxWidth] ?? $maxWidthClasses['md'];
@endphp

<div
    x-data="{
        open: @js($show),
        openModal() {
            this.open = true;
            this.$nextTick(() => {
                this.$refs.closeButton.focus();
            });
        },
        closeModal() {
            this.open = false;
            // If parent has isModalOpen, update it
            if (this.$parent && this.$parent.isModalOpen !== undefined) {
                this.$parent.isModalOpen = false;
            }
            this.$dispatch('modal-closed');
        }
    }"
    @keydown.escape.prevent.stop="closeModal()"
    @modal-open.window="openModal()"
    @modal-close.window="closeModal()"
>
    <!-- Modal Overlay -->
    <div
        x-show="open"
        x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center"
        role="dialog"
        aria-modal="true"
        :aria-labelledby="'{{ $titleId }}'"
        :aria-describedby="'{{ $contentId }}'"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-trap.noscroll="open"
    >
        <!-- Backdrop -->
        <div
            class="fixed inset-0 bg-black/50 transition-opacity"
            @click="closeModal()"
        ></div>

        <!-- Modal Dialog -->
        <div
            class="relative bg-white dark:bg-neutral-900 rounded-lg shadow-xl {{ $maxWidthClass }} w-full mx-4 max-h-[90vh] overflow-hidden"
            @click.away="closeModal()"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
        >
            <!-- Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-neutral-200 dark:border-neutral-800">
                <h2
                    id="{{ $titleId }}"
                    class="text-lg font-semibold text-neutral-900 dark:text-neutral-50"
                >
                    {{ $title }}
                </h2>

                <button
                    @click="closeModal()"
                    x-ref="closeButton"
                    type="button"
                    class="inline-flex items-center justify-center w-8 h-8 text-neutral-400 hover:text-neutral-600 hover:bg-neutral-100 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-neutral-300 dark:hover:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:ring-neutral-600"
                    aria-label="Close modal"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Content -->
            <div
                id="{{ $contentId }}"
                class="px-6 py-4 max-h-[60vh] overflow-y-auto text-neutral-600 dark:text-neutral-300"
            >
                {{ $slot }}
            </div>

            <!-- Footer -->
            @isset($footer)
                <div class="px-6 py-4 border-t border-neutral-200 dark:border-neutral-800">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>
