@php
$align = $attributes->get('align', 'left');
$wrap = $attributes->get('wrap', true);

$alignClasses = [
    'left' => 'text-left',
    'center' => 'text-center',
    'right' => 'text-right',
];

$alignClass = $alignClasses[$align] ?? $alignClasses['left'];

$baseClasses = [
    'p-2',
    'align-middle',
    $alignClass,
    '[&:has([role=checkbox])]:pr-0',
    '[&>[role=checkbox]]:translate-y-0.5'
];

if (!$wrap) {
    $baseClasses[] = 'whitespace-nowrap';
}
@endphp

<td {{ $attributes->except(['align', 'wrap'])->merge(['class' => implode(' ', $baseClasses)]) }}>
    {{ $slot }}
</td>