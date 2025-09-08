@props([
    'defaultTab' => null
])

@php($uid = 'tabs-'.uniqid())

<div class="w-full" x-data="{ activeTab: '{{ $defaultTab }}', uid: '{{ $uid }}' }">
    {{ $slot }}
</div>
