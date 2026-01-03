@php
    $size = $attributes->get('size', 'md');
    $src = $attributes->get('src');
    $alt = $attributes->get('alt', 'Avatar');
    $initials = $attributes->get('initials');
    $status = $attributes->get('status'); // online, offline, away, busy
    $shape = $attributes->get('shape', 'rounded'); // rounded, square

    $sizes = [
        'xs' => ['container' => 'w-6 h-6', 'text' => 'text-xs', 'status' => 'w-2 h-2'],
        'sm' => ['container' => 'w-8 h-8', 'text' => 'text-sm', 'status' => 'w-2.5 h-2.5'],
        'md' => ['container' => 'w-10 h-10', 'text' => 'text-base', 'status' => 'w-3 h-3'],
        'lg' => ['container' => 'w-12 h-12', 'text' => 'text-lg', 'status' => 'w-3.5 h-3.5'],
        'xl' => ['container' => 'w-16 h-16', 'text' => 'text-xl', 'status' => 'w-4 h-4'],
        '2xl' => ['container' => 'w-20 h-20', 'text' => 'text-2xl', 'status' => 'w-5 h-5']
    ];

    $statusColors = [
        'online' => 'bg-emerald-500 dark:bg-emerald-400',
        'offline' => 'bg-neutral-500 dark:bg-neutral-400',
        'away' => 'bg-amber-500 dark:bg-amber-400',
        'busy' => 'bg-red-500 dark:bg-red-400'
    ];

    $sizeConfig = $sizes[$size] ?? $sizes['md'];
    $shapeClass = $shape === 'square' ? 'rounded-lg' : 'rounded-full';
    $statusColor = $statusColors[$status] ?? null;

    // Generate initials from name if not provided
    if (!$initials && !$src && isset($slot) && !empty(trim($slot))) {
        $name = trim(strip_tags($slot));
        $words = explode(' ', $name);
        $initials = '';
        foreach (array_slice($words, 0, 2) as $word) {
            $initials .= strtoupper(substr($word, 0, 1));
        }
    }
@endphp


@props([
    'text',
    'initials',
    'status',
    'src'
])
<div class="relative inline-block">
    <div {{ $attributes
        ->except(['src', 'alt', 'initials', 'status', 'size', 'shape'])
        ->class(cn(
            'inline-flex items-center justify-center overflow-hidden',
            'border-2 border-border bg-background shadow-sm',
            $sizeConfig['container'],
            $shapeClass,
            $attributes->get('class')
        ))
    }}>
        @if($src)
            <img src="{{ $src }}" alt="{{ $alt }}" class="w-full h-full object-cover">
        @elseif($initials)
            <span role="img" aria-label="{{ $alt }}"
                  class="{{ $sizeConfig['text'] }} font-medium text-neutral-900 dark:text-neutral-50">
                {{ $initials }}
            </span>
        @else
            <!-- Default user icon -->
            <svg role="img" aria-label="{{ $alt }}"
                 class="{{ $size === 'xs' ? 'w-4 h-4' : ($size === 'sm' ? 'w-5 h-5' : ($size === 'md' ? 'w-6 h-6' : ($size === 'lg' ? 'w-7 h-7' : ($size === 'xl' ? 'w-10 h-10' : 'w-12 h-12')))) }} text-neutral-500 dark:text-neutral-400"
                 fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
            </svg>
        @endif
    </div>

    @if($status && $statusColor)
        <span
            class="absolute bottom-0 right-0 block {{ $sizeConfig['status'] }} {{ $statusColor }} border-2 border-white dark:border-neutral-950 {{ $shapeClass }}"></span>
    @endif
</div>
