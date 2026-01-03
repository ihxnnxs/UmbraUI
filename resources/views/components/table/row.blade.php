@php
$clickable = $attributes->get('clickable', false);
$selected = $attributes->get('selected', false);

$baseClasses = ['border-b', 'transition-colors'];

if ($selected) {
    $baseClasses[] = 'bg-muted data-[state=selected]:bg-muted';
}

if ($clickable) {
    $baseClasses[] = 'cursor-pointer';
}
@endphp

<tr
    {{ $attributes->except(['clickable', 'selected'])->merge([
        'class' => implode(' ', $baseClasses),
        'data-state' => $selected ? 'selected' : null
    ]) }}
    x-bind:class="{
        'hover:bg-muted/50': $parent.hoverable && !{{ $selected ? 'true' : 'false' }},
        'odd:bg-muted/30': $parent.striped && !{{ $selected ? 'true' : 'false' }}
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
