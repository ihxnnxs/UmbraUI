@php
// Table configuration
$size = $attributes->get('size', 'md');
$striped = $attributes->get('striped', false);
$bordered = $attributes->get('bordered', true);
$hoverable = $attributes->get('hoverable', true);

// Size variants
$sizeClasses = [
    'sm' => 'text-xs',
    'md' => 'text-sm', 
    'lg' => 'text-base',
];

$sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];

// Base table classes
$baseClasses = [
    'w-full',
    'border-collapse',
    $sizeClass
];

// Additional styling classes
$styleClasses = [];
if ($bordered) {
    $styleClasses[] = 'border border-border';
}

$tableClasses = array_merge($baseClasses, $styleClasses);
@endphp

<div class="overflow-x-auto rounded-lg {{ $bordered ? 'border border-border' : '' }}">
    <table 
        {{ $attributes->except(['size', 'striped', 'bordered', 'hoverable'])->merge([
            'class' => implode(' ', $tableClasses)
        ]) }}
        x-data="{ striped: {{ $striped ? 'true' : 'false' }}, hoverable: {{ $hoverable ? 'true' : 'false' }} }"
    >
        {{ $slot }}
    </table>
</div>