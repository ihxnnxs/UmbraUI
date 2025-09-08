@php
    $titleId = 'modal-title-'.uniqid();
    $contentId = 'modal-content-'.uniqid();
@endphp
<dialog {{ $attributes->merge(['role' => 'dialog','aria-modal' => 'true','aria-labelledby' => $titleId, 'aria-describedby' => $contentId]) }} class="bg-white dark:bg-neutral-900 rounded-lg shadow-xl max-w-md w-full p-6 border border-neutral-200 dark:border-neutral-800">
    <div class="flex justify-between items-center mb-4">
        <h2 id="{{ $titleId }}" class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">
            {{ $title ?? 'Modal Title' }}
        </h2>
        <x-umbra-ui::button onclick="this.closest('dialog').close()" class="!p-2 !min-w-0" aria-label="Close dialog">
            ×
        </x-umbra-ui::button>
    </div>
    <div id="{{ $contentId }}" class="text-neutral-600 dark:text-neutral-300">
        {{ $slot }}
    </div>
</dialog>
