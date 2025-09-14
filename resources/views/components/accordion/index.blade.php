@php
    $uid = 'accordion-' . uniqid();
    $headerId = $uid . '-header';
    $contentId = $uid . '-content';
@endphp

<div class="border-b border-neutral-200 dark:border-neutral-800">
    <details class="group peer">
        <summary
            id="{{ $headerId }}"
            class="py-4 font-medium cursor-pointer text-neutral-900 hover:text-neutral-600 dark:text-neutral-50 dark:hover:text-neutral-300 list-none flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-neutral-600 focus:ring-offset-2 rounded-md dark:focus:ring-neutral-400"
            role="button"
            aria-expanded="false"
            aria-controls="{{ $contentId }}"
            tabindex="0"
            @keydown.enter.prevent="$el.click()"
            @keydown.space.prevent="$el.click()"
            @click="$el.setAttribute('aria-expanded', $el.closest('details').open ? 'false' : 'true')"
        >
            <span>{{ $title ?? 'Accordion Title' }}</span>
            <svg
                class="w-5 h-5 transition-transform duration-300 group-open:rotate-180"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </summary>
    </details>
    <div
        id="{{ $contentId }}"
        class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 peer-open:grid-rows-[1fr]"
        role="region"
        aria-labelledby="{{ $headerId }}"
    >
        <div class="overflow-hidden">
            <div class="pb-4 text-neutral-600 dark:text-neutral-300">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
