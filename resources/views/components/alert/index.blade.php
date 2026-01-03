@php
$type = $attributes->get('type', 'default');

$variants = [
    'default' => [
        'wrapper' => 'bg-background border-border text-foreground',
        'icon' => 'text-foreground',
        'title' => 'text-foreground',
        'content' => 'text-muted-foreground'
    ],
    'success' => [
        'wrapper' => 'bg-background border-l-4 border-l-green-600 dark:border-l-green-500',
        'icon' => 'text-green-600 dark:text-green-500',
        'title' => 'text-foreground',
        'content' => 'text-muted-foreground'
    ],
    'error' => [
        'wrapper' => 'border-destructive/50 bg-background text-destructive dark:border-destructive',
        'icon' => 'text-destructive',
        'title' => 'text-destructive',
        'content' => 'text-destructive'
    ],
    'warning' => [
        'wrapper' => 'bg-background border-l-4 border-l-yellow-600 dark:border-l-yellow-500',
        'icon' => 'text-yellow-600 dark:text-yellow-500',
        'title' => 'text-foreground',
        'content' => 'text-muted-foreground'
    ],
    'info' => [
        'wrapper' => 'bg-background border-l-4 border-l-blue-600 dark:border-l-blue-500',
        'icon' => 'text-blue-600 dark:text-blue-500',
        'title' => 'text-foreground',
        'content' => 'text-muted-foreground'
    ]
];

$variant = $variants[$type] ?? $variants['default'];

$icons = [
    'success' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>',
    'error' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>',
    'warning' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>',
    'info' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" /></svg>'
];

$showIcon = $attributes->get('show-icon', true);
$dismissible = $attributes->get('dismissible', false);
@endphp

@php
    $isAssertive = in_array($type, ['error','warning']);
    $live = $isAssertive ? 'assertive' : 'polite';
    $role = $isAssertive ? 'alert' : 'status';

    $baseClasses = cn(
        'relative w-full rounded-lg border px-4 py-3 text-sm',
        '[&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4',
        $variant['wrapper']
    );
@endphp
<div {{ $attributes
    ->except(['type', 'show-icon', 'dismissible'])
    ->merge([
        'role' => $role,
        'aria-live' => $live,
        'aria-atomic' => 'true'
    ])
    ->class(cn($baseClasses, $attributes->get('class')))
}}
     @if($dismissible) x-data="{ show: true }" x-show="show" x-transition @endif>
    <div class="flex">
        @if($showIcon)
        <div class="flex-shrink-0">
            <span class="{{ $variant['icon'] }}">
                {!! $icons[$type] ?? $icons['info'] !!}
            </span>
        </div>
        @endif
        
        <div class="{{ $showIcon ? 'ml-3' : '' }} flex-1">
            @if(isset($title))
            <h3 class="text-sm font-medium {{ $variant['title'] }} mb-1">
                {{ $title }}
            </h3>
            @endif
            
            <div class="text-sm {{ $variant['content'] }}">
                {{ $slot }}
            </div>
            
            @if(isset($actions))
            <div class="mt-3">
                {{ $actions }}
            </div>
            @endif
        </div>
        
        @if($dismissible)
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button type="button" 
                        @click="show = false"
                        class="inline-flex rounded-md p-1.5 {{ $variant['icon'] }} hover:bg-black/5 dark:hover:bg-white/5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-transparent focus:ring-current">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        @endif
    </div>
</div>
