@props([
    'label' => null,
    'error' => null,
    'helper' => null,
    'required' => false,
    'for' => null
])

@php
    $fieldId = $for ?? 'field-' . uniqid();
    $helperId = $helper ? $fieldId . '-helper' : null;
    $errorId = $error ? $fieldId . '-error' : null;

    // Build aria-describedby
    $ariaDescribedBy = collect([$helperId, $errorId])->filter()->join(' ');
@endphp

<div {{ $attributes->except(['label', 'error', 'helper', 'required', 'for'])->merge(['class' => 'space-y-2 w-full']) }}>
    @if($label)
        <x-umbra::label for="{{ $fieldId }}"
                        class="{{ $required ? 'after:content-[\'*\'] after:ml-0.5 after:text-red-500' : '' }}">
            {{ $label }}
        </x-umbra::label>
    @endif

    <div
        x-data="{
            setAriaAttributes() {
                const input = this.$el.querySelector('input, textarea, select');
                if (input && !input.id) {
                    input.id = '{{ $fieldId }}';
                }
                if (input && '{{ $ariaDescribedBy }}') {
                    input.setAttribute('aria-describedby', '{{ $ariaDescribedBy }}');
                }
                if (input && {{ $error ? 'true' : 'false' }}) {
                    input.setAttribute('aria-invalid', 'true');
                }
                if (input && {{ $required ? 'true' : 'false' }}) {
                    input.setAttribute('aria-required', 'true');
                }
            }
        }"
        x-init="setAriaAttributes()"
    >
        {{ $slot }}
    </div>

    @if($error)
        <p id="{{ $errorId }}" class="text-sm text-red-600 dark:text-red-400" role="alert">
            {{ $error }}
        </p>
    @endif

    @if($helper)
        <p id="{{ $helperId }}" class="text-sm text-neutral-500 dark:text-neutral-400">
            {{ $helper }}
        </p>
    @endif
</div>
