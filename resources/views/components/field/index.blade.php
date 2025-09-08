@php
    $for = $attributes->get('for');
    $wrapperAttrs = $attributes->except('for');
    $helperId = $for ? $for . '-helper' : null;
    $errorId = $for ? $for . '-error' : null;
@endphp
<div {{ $wrapperAttrs->merge(['class' => 'space-y-2 w-full']) }}>
    @if(isset($label))
        <x-umbra-ui::label :for="$for">{{ $label }}</x-umbra-ui::label>
    @endif

    {{ $slot }}

    @if(isset($error))
        <p @if($errorId) id="{{ $errorId }}" @endif class="text-sm text-red-600 dark:text-red-400">{{ $error }}</p>
    @endif

    @if(isset($helper))
        <p @if($helperId) id="{{ $helperId }}" @endif class="text-sm text-neutral-500 dark:text-neutral-400">{{ $helper }}</p>
    @endif
</div>
