<div class="inline-flex p-1 bg-neutral-300 dark:bg-neutral-800 rounded-lg space-x-1" role="tablist"
     @keydown.arrow-right.prevent="const tabs=[...$el.querySelectorAll('[role=tab]')]; const i=tabs.indexOf(document.activeElement); tabs[(i+1)%tabs.length]?.focus()"
     @keydown.arrow-left.prevent="const tabs=[...$el.querySelectorAll('[role=tab]')]; const i=tabs.indexOf(document.activeElement); tabs[(i-1+tabs.length)%tabs.length]?.focus()">
    {{ $slot }}
    </div>
