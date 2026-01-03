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
    <div class="{{ cn(
        'relative inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent',
        'transition-colors',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background',
        'disabled:cursor-not-allowed disabled:opacity-50',
        'bg-input peer-checked:bg-primary',
        'after:content-[\'\'] after:absolute after:top-[2px] after:start-[2px] after:bg-background',
        'after:rounded-full after:h-5 after:w-5 after:transition-transform',
        'peer-checked:after:translate-x-5 rtl:peer-checked:after:-translate-x-5'
    ) }}"></div>
</label>
