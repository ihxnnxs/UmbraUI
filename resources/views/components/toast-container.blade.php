@php
    $toasts = [];

    // Get flash toast message
    if (session()->has('umbra_toast')) {
        $toasts[] = session()->get('umbra_toast');
    }

    // Support for redirect()->with() patterns
    $supportedTypes = ['success', 'error', 'warning', 'info', 'message'];

    foreach ($supportedTypes as $type) {
        if (session()->has($type)) {
            $toasts[] = [
                'type' => $type === 'message' ? 'default' : $type,
                'message' => session()->get($type),
                'title' => null,
            ];
        }
    }

    // Support for structured messages
    if (session()->has('toast_success')) {
        $toasts[] = [
            'type' => 'success',
            'message' => session()->get('toast_success'),
            'title' => session()->get('toast_success_title'),
        ];
    }

    if (session()->has('toast_error')) {
        $toasts[] = [
            'type' => 'error',
            'message' => session()->get('toast_error'),
            'title' => session()->get('toast_error_title'),
        ];
    }

    if (session()->has('toast_warning')) {
        $toasts[] = [
            'type' => 'warning',
            'message' => session()->get('toast_warning'),
            'title' => session()->get('toast_warning_title'),
        ];
    }

    if (session()->has('toast_info')) {
        $toasts[] = [
            'type' => 'info',
            'message' => session()->get('toast_info'),
            'title' => session()->get('toast_info_title'),
        ];
    }
@endphp

@foreach($toasts as $toast)
    <x-umbra::toast
        :type="$toast['type']"
        :position="$attributes->get('position', 'top-right')"
        :dismissible="$attributes->get('dismissible', true)"
        :duration="$attributes->get('duration', 5000)"
    >
        @if($toast['title'])
            <x-slot name="title">{{ $toast['title'] }}</x-slot>
        @endif
        {{ $toast['message'] }}
    </x-umbra::toast>
@endforeach
