@php
$type = $attributes->get('type', 'default');
$position = $attributes->get('position', 'top-right');
$dismissible = $attributes->get('dismissible', true);
$duration = $attributes->get('duration', 5000);

$variants = [
    'success' => [
        'wrapper' => 'bg-white dark:bg-neutral-950 border-l-4 border-l-emerald-500 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
        'icon' => 'text-emerald-500 dark:text-emerald-400'
    ],
    'error' => [
        'wrapper' => 'bg-white dark:bg-neutral-950 border-l-4 border-l-red-500 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
        'icon' => 'text-red-500 dark:text-red-400'
    ],
    'warning' => [
        'wrapper' => 'bg-white dark:bg-neutral-950 border-l-4 border-l-amber-500 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
        'icon' => 'text-amber-500 dark:text-amber-400'
    ],
    'info' => [
        'wrapper' => 'bg-white dark:bg-neutral-950 border-l-4 border-l-blue-500 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
        'icon' => 'text-blue-500 dark:text-blue-400'
    ],
    'default' => [
        'wrapper' => 'bg-white dark:bg-neutral-950 border-l-4 border-l-neutral-400 dark:border-l-neutral-600 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
        'icon' => 'text-neutral-500 dark:text-neutral-400'
    ]
];

$variant = $variants[$type] ?? $variants['default'];

$icons = [
    'success' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>',
    'error' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>',
    'warning' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>',
    'info' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" /></svg>',
    'default' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /></svg>'
];

$positions = [
    'top-left' => 'top-4 left-4',
    'top-right' => 'top-4 right-4',
    'top-center' => 'top-4 left-1/2 transform -translate-x-1/2',
    'bottom-left' => 'bottom-4 left-4',
    'bottom-right' => 'bottom-4 right-4',
    'bottom-center' => 'bottom-4 left-1/2 transform -translate-x-1/2',
];

$positionClass = $positions[$position] ?? $positions['top-right'];
$toastId = 'toast-' . uniqid();
@endphp

<div 
    id="{{ $toastId }}"
    @php
        $isAssertive = in_array($type, ['error','warning']);
        $live = $isAssertive ? 'assertive' : 'polite';
        $role = $isAssertive ? 'alert' : 'status';
    @endphp
    role="{{ $role }}"
    aria-live="{{ $live }}"
    aria-atomic="true"
    x-data="{ 
        show: false,
        container: null,
        init() {
            this.addToStack();
            requestAnimationFrame(() => {
                this.show = true;
                if ({{ $duration }} > 0) {
                    setTimeout(() => this.hide(), {{ $duration }});
                }
            });
        },
        addToStack() {
            this.container = document.getElementById('toast-container-{{ $position }}');
            if (!this.container) {
                this.container = document.createElement('div');
                this.container.id = 'toast-container-{{ $position }}';
                this.container.className = 'fixed z-50 {{ $positionClass }} pointer-events-none flex flex-col {{ str_contains($position, 'bottom') ? 'flex-col-reverse' : '' }} gap-2 max-w-sm w-full';
                document.body.appendChild(this.container);
            }
            this.container.appendChild(this.$el);
        },
        hide() {
            if (!this.show) return;
            this.show = false;
            requestAnimationFrame(() => {
                setTimeout(() => {
                    if (this.$el && this.$el.parentNode) {
                        this.$el.remove();
                    }
                    if (this.container && this.container.children.length === 0) {
                        this.container.remove();
                    }
                }, 250);
            });
        }
    }"
    x-show="show"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-2 scale-95"
    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
    x-transition:leave-end="opacity-0 translate-y-1 scale-95"
    {{ $attributes->except(['type', 'position', 'dismissible', 'duration'])->merge(['class' => 'w-full pointer-events-auto']) }}
>
    <div class="{{ $variant['wrapper'] }} rounded-lg p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <span class="{{ $variant['icon'] }}">
                    {!! $icons[$type] ?? $icons['default'] !!}
                </span>
            </div>
            
            <div class="ml-3 w-0 flex-1">
                @if(isset($title))
                <p class="text-sm font-medium text-neutral-900 dark:text-neutral-50">
                    {{ $title }}
                </p>
                @endif
                
                <div class="text-sm text-neutral-600 dark:text-neutral-300 {{ isset($title) ? 'mt-1' : '' }}">
                    {{ $slot }}
                </div>
                
                @if(isset($actions))
                <div class="mt-3 flex space-x-7">
                    {{ $actions }}
                </div>
                @endif
            </div>
            
            @if($dismissible)
            <div class="ml-4 flex-shrink-0">
                <button 
                    type="button"
                    @click="hide()"
                    class="rounded-md inline-flex items-center justify-center w-6 h-6 {{ $variant['icon'] }} hover:bg-black/5 dark:hover:bg-white/5 focus:outline-none focus:ring-2 focus:ring-neutral-400 dark:focus:ring-neutral-500"
                >
                    <span class="sr-only">Close</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            @endif
        </div>
    </div>
</div>
