<progress {{$attributes->merge([
    'value' => '100',
    'max' => '200',
    'class' => 'w-full h-2 appearance-none bg-neutral-200 rounded-full [&::-webkit-progress-bar]:bg-neutral-200 [&::-webkit-progress-bar]:rounded-full [&::-webkit-progress-value]:bg-neutral-900 [&::-webkit-progress-value]:rounded-full [&::-moz-progress-bar]:bg-neutral-900 [&::-moz-progress-bar]:rounded-full border-0 transition-all duration-200 dark:bg-neutral-800 dark:[&::-webkit-progress-bar]:bg-neutral-800 dark:[&::-webkit-progress-value]:bg-neutral-50 dark:[&::-moz-progress-bar]:bg-neutral-50'
])}}>{{$slot}}</progress>
