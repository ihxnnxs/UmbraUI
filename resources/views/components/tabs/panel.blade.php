@props([
    'value' => ''
])

<div 
    role="tabpanel"
    :id="`panel-${uid}-{{ $value }}`"
    :aria-labelledby="`tab-${uid}-{{ $value }}`"
    x-show="activeTab === '{{ $value }}'"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 transform translate-y-4"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    class="py-4">
    {{ $slot }}
</div>
