@props([
    'value' => ''
])

<button
    type="button"
    role="tab"
    x-on:click="activeTab = '{{ $value }}'"
    :id="`tab-${uid}-{{ $value }}`"
    :aria-controls="`panel-${uid}-{{ $value }}`"
    :tabindex="activeTab === '{{ $value }}' ? '0' : '-1'"
    :aria-selected="activeTab === '{{ $value }}'"
    @keydown.enter.prevent="activeTab = '{{ $value }}'"
    @keydown.space.prevent="activeTab = '{{ $value }}'"
    :class="activeTab === '{{ $value }}' ?
        'bg-neutral-900 text-neutral-50 dark:bg-neutral-50 dark:text-neutral-950' :
        'text-neutral-700 hover:bg-neutral-200 dark:text-neutral-400 dark:hover:bg-neutral-700'"
    class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">
    {{ $slot }}
</button>
