@php
    $hasAccessibleName = $attributes->has('aria-label') || $attributes->has('aria-labelledby');
    $isDisabled = $attributes->has('disabled');
    $isChecked = $attributes->has('checked');
    $hasOnChange = $attributes->has('onchange');
    $hasOnKeyDown = $attributes->has('onkeydown');
    $hasAriaChecked = $attributes->has('aria-checked');
@endphp
<label class="relative inline-flex items-center cursor-pointer">
    <input type="checkbox" {{ $attributes->merge([
        'role' => 'switch',
        'aria-label' => $hasAccessibleName ? null : 'Toggle',
        'aria-disabled' => $isDisabled ? 'true' : null,
        'aria-checked' => $hasAriaChecked ? null : ($isChecked ? 'true' : 'false'),
        'onchange' => $hasOnChange ? null : "this.setAttribute('aria-checked', this.checked ? 'true' : 'false')",
        'onkeydown' => $hasOnKeyDown ? null : "if(event.key==='Enter'){ this.click(); }",
    ]) }} class="sr-only peer" />
    <div class="relative w-11 h-6 bg-neutral-200 rounded-full peer dark:bg-neutral-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-neutral-900 dark:peer-checked:bg-neutral-200 dark:after:bg-neutral-900 dark:peer-checked:after:bg-neutral-900 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-neutral-600 peer-focus:ring-offset-2 dark:peer-focus:ring-neutral-400 dark:peer-focus:ring-offset-neutral-900"></div>
</label>
