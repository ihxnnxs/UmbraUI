@php
$clickable = $attributes->get('clickable', false);
$selected = $attributes->get('selected', false);

$baseClasses = [];

if ($selected) {
    $baseClasses[] = 'bg-neutral-100 dark:bg-neutral-800';
}

if ($clickable) {
    $baseClasses[] = 'cursor-pointer transition-colors duration-150';
}
@endphp

<tr 
    {{ $attributes->except(['clickable', 'selected'])->merge([
        'class' => implode(' ', $baseClasses)
    ]) }}
    x-bind:class="{
        'hover:bg-neutral-50 dark:hover:bg-neutral-900': $parent.hoverable && !{{ $selected ? 'true' : 'false' }},
        'odd:bg-neutral-25 dark:odd:bg-neutral-925': $parent.striped && !{{ $selected ? 'true' : 'false' }}
    }"
    @if($clickable && $attributes->has('href'))
        tabindex="0"
        @click="window.location.href = '{{ $attributes->get('href') }}'"
        @keydown.enter.prevent="window.location.href = '{{ $attributes->get('href') }}'"
        @keydown.space.prevent="window.location.href = '{{ $attributes->get('href') }}'"
    @endif
>
    {{ $slot }}
</tr>
