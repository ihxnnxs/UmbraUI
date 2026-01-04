<a {{$attributes->merge(['href' => '#','class' => 'inline-flex items-center text-sm font-medium text-neutral-700 hover:text-neutral-900 dark:text-neutral-300 dark:hover:text-neutral-50'])}}>
    <x-umbra::icons.slash class="w-3 h-3 me-2.5"/>
    {{$slot}}
</a>
