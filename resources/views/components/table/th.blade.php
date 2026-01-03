@php
$align = $attributes->get('align', 'left');

$alignClasses = [
    'left' => 'text-left',
    'center' => 'text-center', 
    'right' => 'text-right',
];

$alignClass = $alignClasses[$align] ?? $alignClasses['left'];

$baseClasses = [
    'h-10 px-2',
    'font-medium text-muted-foreground',
    $alignClass,
    'align-middle',
    '[&:has([role=checkbox])]:pr-0',
    '[&>[role=checkbox]]:translate-y-0.5'
];
@endphp

<th 
    {{ $attributes->except(['align'])->merge([
        'class' => implode(' ', $baseClasses),
        'scope' => 'col'
    ]) }}
>
    {{ $slot }}
</th>