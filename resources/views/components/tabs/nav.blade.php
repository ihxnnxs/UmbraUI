<div class="inline-flex p-1 bg-neutral-300 dark:bg-neutral-800 rounded-lg space-x-1" role="tablist"
     @keydown.arrow-right.prevent="const tabs=[...$el.querySelectorAll('[role=tab]')]; const i=tabs.indexOf(document.activeElement); const next=tabs[(i+1)%tabs.length]; next?.focus(); next?.click();"
     @keydown.arrow-left.prevent="const tabs=[...$el.querySelectorAll('[role=tab]')]; const i=tabs.indexOf(document.activeElement); const prev=tabs[(i-1+tabs.length)%tabs.length]; prev?.focus(); prev?.click();"
     @keydown.home.prevent="const tabs=[...$el.querySelectorAll('[role=tab]')]; tabs[0]?.focus(); tabs[0]?.click();"
     @keydown.end.prevent="const tabs=[...$el.querySelectorAll('[role=tab]')]; tabs[tabs.length-1]?.focus(); tabs[tabs.length-1]?.click();">
    {{ $slot }}
    </div>
