@php
$colspan = $attributes->get('colspan', 1);
@endphp

<tr>
    <td
        colspan="{{ $colspan }}"
        {{ $attributes->except(['colspan'])->merge([
            'class' => 'px-4 py-12 text-center text-muted-foreground'
        ]) }}
    >
        <div class="flex flex-col items-center space-y-3">
            @isset($icon)
                <div class="w-12 h-12 text-muted-foreground/50">
                    {{ $icon }}
                </div>
            @else
                <svg class="w-12 h-12 text-muted-foreground/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                </svg>
            @endisset

            <div>
                @isset($title)
                    <h3 class="text-sm font-medium text-foreground">
                        {{ $title }}
                    </h3>
                @endif

                <p class="text-sm {{ isset($title) ? 'mt-1' : '' }}">
                    {{ $slot ?: 'No data available' }}
                </p>
                
                @isset($action)
                    <div class="mt-4">
                        {{ $action }}
                    </div>
                @endisset
            </div>
        </div>
    </td>
</tr>