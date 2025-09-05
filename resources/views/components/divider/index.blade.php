@php
    $isVertical = $attributes->get('orientation') === 'vertical';
    $hasContent = !$slot->isEmpty();
@endphp

@if($hasContent)
    <div @class([
    'flex items-center',
    'flex-col' => $isVertical,
    'my-4' => !$isVertical,
    'mx-4' => $isVertical
])>
        <div @class(['flex-1 bg-neutral-300 dark:bg-neutral-700', 'h-0.5' => !$isVertical, 'w-0.5' => $isVertical])></div>
        <div @class(['text-sm text-neutral-600 dark:text-neutral-400', 'px-4' => !$isVertical, 'py-3' => $isVertical])>
            {{ $slot }}
        </div>
        <div @class(['flex-1 bg-neutral-300 dark:bg-neutral-700', 'h-0.5' => !$isVertical, 'w-0.5' => $isVertical])></div>
    </div>
@else
    <hr {{ $attributes->except('orientation')->merge(['class' => $isVertical ? 'w-0.5 mx-4 border-l border-neutral-300 dark:border-neutral-700 inline-block' : 'h-0.5 my-4 border-0 bg-neutral-300 dark:bg-neutral-700']) }} />
@endif
