<!doctype html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['workbench/resources/css/app.css', 'workbench/resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>UmbraUI v0.4.0-alpha</title>
    <style>[x-cloak]{ display:none !important; }</style>
</head>
<body class="bg-background text-foreground transition-colors duration-200">
<div class="min-h-screen bg-background p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="relative text-center mb-8 sm:mb-12">
            <!-- Theme Toggle Button -->
            <button
                @click="darkMode = !darkMode"
                class="absolute right-0 top-0 p-2 rounded-lg border border-border bg-card hover:bg-accent transition-colors"
                :aria-label="darkMode ? 'Switch to light mode' : 'Switch to dark mode'"
            >
                <!-- Sun Icon (shown in dark mode) -->
                <svg x-show="darkMode" x-cloak class="w-5 h-5 text-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <!-- Moon Icon (shown in light mode) -->
                <svg x-show="!darkMode" x-cloak class="w-5 h-5 text-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
            </button>

            <h1 class="text-3xl sm:text-4xl font-bold text-foreground mb-2">UmbraUI</h1>
            <p class="text-muted-foreground text-sm sm:text-base">Modern UI Components for Laravel + Tailwind CSS + Alpine.js</p>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">

            <!-- Buttons & Controls -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Buttons &amp; Controls</h3>
                <div class="space-y-3">
                    <x-umbra::button>Primary Button</x-umbra::button>
                    <x-umbra::select>
                        <option>Select an option...</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </x-umbra::select>

                    <!-- Dropdown Examples -->
                    <div class="flex flex-wrap gap-2">
                        <!-- Actions dropdown with submenu -->
                        <x-umbra::dropdown>
                            <x-slot name="trigger">Actions</x-slot>

                            <x-umbra::dropdown.item>Edit Profile</x-umbra::dropdown.item>
                            <x-umbra::dropdown.item>Copy Link</x-umbra::dropdown.item>

                            <!-- Submenu -->
                            <x-umbra::dropdown.submenu>
                                <x-slot name="trigger">More Actions</x-slot>

                                <x-umbra::dropdown.item>Export Data</x-umbra::dropdown.item>
                                <x-umbra::dropdown.item>Import Data</x-umbra::dropdown.item>
                                <x-umbra::dropdown.separator/>
                                <x-umbra::dropdown.item>Archive</x-umbra::dropdown.item>

                                <!-- Nested submenu -->
                                <x-umbra::dropdown.submenu>
                                    <x-slot name="trigger">Advanced</x-slot>

                                    <x-umbra::dropdown.item>Reset Settings</x-umbra::dropdown.item>
                                    <x-umbra::dropdown.item>Clear Cache</x-umbra::dropdown.item>
                                    <x-umbra::dropdown.item destructive="true">Force Delete
                                    </x-umbra::dropdown.item>
                                </x-umbra::dropdown.submenu>
                            </x-umbra::dropdown.submenu>

                            <x-umbra::dropdown.separator/>
                            <x-umbra::dropdown.item destructive="true">Delete</x-umbra::dropdown.item>
                        </x-umbra::dropdown>

                        <!-- Menu dropdown -->
                        <x-umbra::dropdown position="bottom-right">
                            <x-slot name="trigger">Menu</x-slot>

                            <x-umbra::dropdown.item href="#" active="true">Dashboard</x-umbra::dropdown.item>
                            <x-umbra::dropdown.item href="#">Profile</x-umbra::dropdown.item>
                            <x-umbra::dropdown.item href="#">Settings</x-umbra::dropdown.item>
                            <x-umbra::dropdown.separator/>
                            <x-umbra::dropdown.item disabled="true">Disabled</x-umbra::dropdown.item>
                        </x-umbra::dropdown>

                        <!-- Simple dropdown -->
                        <x-umbra::dropdown>
                            <x-umbra::dropdown.item>Option A</x-umbra::dropdown.item>
                            <x-umbra::dropdown.item>Option B</x-umbra::dropdown.item>
                            <x-umbra::dropdown.item>Option C</x-umbra::dropdown.item>
                        </x-umbra::dropdown>
                    </div>

                    <!-- Tooltip Examples -->
                    <div class="flex flex-wrap items-center gap-3 pt-2">
                        <x-umbra::tooltip placement="top">
                            <x-slot name="trigger">
                                <x-umbra::button>Top tooltip</x-umbra::button>
                            </x-slot>
                            This appears above the trigger.
                        </x-umbra::tooltip>

                        <x-umbra::tooltip placement="bottom" open-delay="200" close-delay="120">
                            <x-slot name="trigger">
                                <x-umbra::button>Bottom (delay)</x-umbra::button>
                            </x-slot>
                            Slight delay on open/close.
                        </x-umbra::tooltip>

                        <x-umbra::tooltip placement="right">
                            <x-slot name="trigger">
                                <x-umbra::button>Right</x-umbra::button>
                            </x-slot>
                            Right aligned tooltip.
                        </x-umbra::tooltip>

                        <x-umbra::tooltip placement="left-start">
                            <x-slot name="trigger">
                                <x-umbra::button>Left-Start</x-umbra::button>
                            </x-slot>
                            Start-aligned left tooltip.
                        </x-umbra::tooltip>

                        <!-- Text trigger default -->
                        <x-umbra::tooltip text="Neutral tooltip text" />
                    </div>

                    <!-- Popover Examples -->
                    <div class="flex flex-wrap gap-3 pt-2">
                        <!-- Default popover (bottom, click) -->
                        <x-umbra::popover placement="bottom">
                            <x-slot name="trigger">
                                <x-umbra::button>Default popover</x-umbra::button>
                            </x-slot>
                            <x-slot name="header">Popover title</x-slot>
                            And here's some amazing content. It's very engaging. Right?
                        </x-umbra::popover>

                        <!-- Top aligned -->
                        <x-umbra::popover placement="top">
                            <x-slot name="trigger">
                                <x-umbra::button>Top</x-umbra::button>
                            </x-slot>
                            <x-slot name="header">On Top</x-slot>
                            Pops above the trigger.
                        </x-umbra::popover>

                        <!-- Right aligned -->
                        <x-umbra::popover placement="right">
                            <x-slot name="trigger">
                                <x-umbra::button>Right</x-umbra::button>
                            </x-slot>
                            <x-slot name="header">On Right</x-slot>
                            Pops to the right of the trigger.
                        </x-umbra::popover>

                        <!-- Left-start aligned -->
                        <x-umbra::popover placement="left-start">
                            <x-slot name="trigger">
                                <x-umbra::button>Left-Start</x-umbra::button>
                            </x-slot>
                            <x-slot name="header">Left Start</x-slot>
                            Start-aligned to the left.
                        </x-umbra::popover>

                        <!-- Hover-triggered popover -->
                        <x-umbra::popover placement="bottom" trigger="hover">
                            <x-slot name="trigger">
                                <x-umbra::button>Hover me</x-umbra::button>
                            </x-slot>
                            <x-slot name="header">Hover Popover</x-slot>
                            Opens on hover and closes on mouse leave.
                        </x-umbra::popover>
                    </div>
                </div>
                <x-umbra::progress>TEST</x-umbra::progress>
                <x-umbra::divider>или</x-umbra::divider>

            </div>

            <!-- Form Inputs -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Form Inputs</h3>
                <div class="space-y-3">
                    <x-umbra::input type="text" placeholder="Text input"/>
                    <x-umbra::input type="email" placeholder="Email input"/>
                    <x-umbra::input type="search" placeholder="Search..."/>
                    <x-umbra::textarea placeholder="Textarea content..."></x-umbra::textarea>
                </div>
            </div>

            <!-- Selections -->
            <div>
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50 mb-2">Selections</h3>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <x-umbra::checkbox id="check1"/>
                        <x-umbra::label for="check1">Checkbox</x-umbra::label>
                    </div>

                    <div class="flex items-center space-x-2">
                        <x-umbra::radio id="radio1" name="radio" value="1"/>
                        <x-umbra::label for="radio1">Radio option</x-umbra::label>
                    </div>

                    <div class="flex items-center space-x-2">
                        <x-umbra::switch id="switch1"/>
                        <x-umbra::label :clickable="false">Toggle Switch</x-umbra::label>
                    </div>
                    <x-umbra::breadcrumb>
                        <x-umbra::breadcrumb.list>
                            <x-umbra::breadcrumb.item>
                                <x-umbra::breadcrumb.link>Home</x-umbra::breadcrumb.link>
                            </x-umbra::breadcrumb.item>
                            <x-umbra::breadcrumb.item>
                                <x-umbra::breadcrumb.link>Home</x-umbra::breadcrumb.link>
                            </x-umbra::breadcrumb.item>
                            <x-umbra::breadcrumb.item>
                                <x-umbra::breadcrumb.link>Home</x-umbra::breadcrumb.link>
                            </x-umbra::breadcrumb.item>

                        </x-umbra::breadcrumb.list>
                    </x-umbra::breadcrumb>

                    <x-umbra::spinner/>
                </div>
            </div>

            <!-- Interactive -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Interactive</h3>
                <div class="space-y-4">
                    <x-umbra::slider min="0" max="100" value="65"/>
                    <x-umbra::date-picker value="2025-01-15"/>
                </div>
            </div>

            <!-- Badges -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Badges</h3>
                <div class="space-y-3">
                    <div class="flex flex-wrap gap-2">
                        <x-umbra::badge>Default</x-umbra::badge>
                        <x-umbra::badge variant="primary">Primary</x-umbra::badge>
                        <x-umbra::badge variant="success">Success</x-umbra::badge>
                        <x-umbra::badge variant="error">Error</x-umbra::badge>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <x-umbra::badge variant="warning">Warning</x-umbra::badge>
                        <x-umbra::badge variant="info">Info</x-umbra::badge>
                        <x-umbra::badge dot="true">With Dot</x-umbra::badge>
                        <x-umbra::badge size="lg" removable="true">Large</x-umbra::badge>
                    </div>
                </div>
            </div>

            <!-- Avatars -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Avatars</h3>
                <div class="space-y-4">
                    <!-- Different sizes -->
                    <div class="flex items-center gap-3">
                        <x-umbra::avatar size="xs" initials="XS"/>
                        <x-umbra::avatar size="sm" initials="SM"/>
                        <x-umbra::avatar size="md" initials="MD"/>
                        <x-umbra::avatar size="lg" initials="LG"/>
                        <x-umbra::avatar size="xl" initials="XL"/>
                    </div>
                    <!-- With status indicators -->
                    <div class="flex items-center gap-3">
                        <x-umbra::avatar status="online" initials="ON"/>
                        <x-umbra::avatar status="offline" initials="OF"/>
                        <x-umbra::avatar status="away" initials="AW"/>
                        <x-umbra::avatar status="busy" initials="BS"/>
                    </div>
                    <!-- Different shapes -->
                    <div class="flex items-center gap-3">
                        <x-umbra::avatar shape="rounded" initials="RD"/>
                        <x-umbra::avatar shape="square" initials="SQ"/>
                        <x-umbra::avatar src="https://via.placeholder.com/40/6b7280/ffffff?text=IMG" initials="RD"/>
                    </div>
                </div>
            </div>

            <!-- Links & Navigation -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Links</h3>
                <div class="space-y-2">
                    <div>
                        <x-umbra::link href="#">Default Link</x-umbra::link>
                    </div>
                    <div>
                        <x-umbra::link href="https://laravel.com" target="_blank">External Link</x-umbra::link>
                    </div>
                    <div>
                        <x-umbra::link href="/docs" class="text-blue-600 dark:text-blue-400">Custom Styled Link
                        </x-umbra::link>
                    </div>
                </div>
            </div>

            <!-- Icons -->
            <div class="space-y-4 col-span-full">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Icons</h3>

                <!-- Basic Icons -->
                <div>
                    <h4 class="text-md font-medium text-neutral-700 dark:text-neutral-300 mb-3">Default Styles</h4>
                    <div class="grid grid-cols-4 sm:grid-cols-6 lg:grid-cols-8 gap-4">
                        <div class="flex flex-col items-center p-3 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <x-umbra::icons.home/>
                            <span class="text-xs text-neutral-600 dark:text-neutral-400 mt-2">home</span>
                        </div>
                        <div class="flex flex-col items-center p-3 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <x-umbra::icons.user/>
                            <span class="text-xs text-neutral-600 dark:text-neutral-400 mt-2">user</span>
                        </div>
                        <div class="flex flex-col items-center p-3 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <x-umbra::icons.heart/>
                            <span class="text-xs text-neutral-600 dark:text-neutral-400 mt-2">heart</span>
                        </div>
                        <div class="flex flex-col items-center p-3 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <x-umbra::icons.star/>
                            <span class="text-xs text-neutral-600 dark:text-neutral-400 mt-2">star</span>
                        </div>
                        <div class="flex flex-col items-center p-3 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <x-umbra::icons.settings/>
                            <span class="text-xs text-neutral-600 dark:text-neutral-400 mt-2">settings</span>
                        </div>
                        <div class="flex flex-col items-center p-3 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <x-umbra::icons.mail/>
                            <span class="text-xs text-neutral-600 dark:text-neutral-400 mt-2">mail</span>
                        </div>
                        <div class="flex flex-col items-center p-3 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <x-umbra::icons.bell/>
                            <span class="text-xs text-neutral-600 dark:text-neutral-400 mt-2">bell</span>
                        </div>
                        <div class="flex flex-col items-center p-3 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <x-umbra::icons.activity/>
                            <span class="text-xs text-neutral-600 dark:text-neutral-400 mt-2">activity</span>
                        </div>
                    </div>
                </div>

                <!-- Usage Examples -->
                <div>
                    <h4 class="text-md font-medium text-neutral-700 dark:text-neutral-300 mb-3">Usage Examples</h4>
                    <div class="space-y-3">
                        <!-- In buttons -->
                        <div class="flex flex-wrap gap-2">
                            <x-umbra::button class="flex items-center">
                                <x-umbra::icons.home class="dark:text-neutral-700"/>
                                Home
                            </x-umbra::button>
                            <x-umbra::button class="flex items-center">
                                <x-umbra::icons.user class="dark:text-neutral-700"/>
                                Profile
                            </x-umbra::button>
                            <x-umbra::button class="flex items-center">
                                <x-umbra::icons.settings class="dark:text-neutral-700"/>
                                Settings
                            </x-umbra::button>
                        </div>

                        <!-- In notifications -->
                        <div class="flex flex-wrap gap-3">
                            <div class="flex items-center p-2 bg-green-50 dark:bg-green-900/20 text-green-700 dark:text-green-300 rounded-lg">
                                <x-umbra::icons.activity class="w-5 h-5 mr-2 text-green-600"/>
                                <span class="text-sm">System is running smoothly</span>
                            </div>
                            <div class="flex items-center p-2 bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-300 rounded-lg">
                                <x-umbra::icons.bell class="w-5 h-5 mr-2 text-red-600"/>
                                <span class="text-sm">3 new notifications</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tabs -->
            <div class="space-y-4 col-span-full">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Tabs</h3>
                <x-umbra::tabs default-tab="tab1">
                    <x-umbra::tabs.nav>
                        <x-umbra::tabs.tab value="tab1">Overview</x-umbra::tabs.tab>
                        <x-umbra::tabs.tab value="tab2">Features</x-umbra::tabs.tab>
                        <x-umbra::tabs.tab value="tab3">Settings</x-umbra::tabs.tab>
                    </x-umbra::tabs.nav>

                    <x-umbra::tabs.panel value="tab1">
                        <div class="p-4 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <h4 class="font-semibold text-neutral-900 dark:text-neutral-50 mb-2">Overview</h4>
                            <p class="text-neutral-600 dark:text-neutral-400">UmbraUI provides modern, accessible
                                components for Laravel applications.</p>
                        </div>
                    </x-umbra::tabs.panel>

                    <x-umbra::tabs.panel value="tab2">
                        <div class="p-4 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <h4 class="font-semibold text-neutral-900 dark:text-neutral-50 mb-2">Features</h4>
                            <ul class="list-disc list-inside text-neutral-600 dark:text-neutral-400 space-y-1">
                                <li>Alpine.js integration</li>
                                <li>Tailwind CSS styling</li>
                                <li>Dark mode support</li>
                                <li>Accessible components</li>
                            </ul>
                        </div>
                    </x-umbra::tabs.panel>

                    <x-umbra::tabs.panel value="tab3">
                        <div class="p-4 bg-neutral-50 dark:bg-neutral-900 rounded-lg">
                            <h4 class="font-semibold text-neutral-900 dark:text-neutral-50 mb-2">Settings</h4>
                            <p class="text-neutral-600 dark:text-neutral-400">Component configuration and theming
                                options.</p>
                        </div>
                    </x-umbra::tabs.panel>
                </x-umbra::tabs>
            </div>


            <!-- Data Tables -->
            <div class="col-span-full space-y-6">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Data Tables</h3>

                <!-- Basic Table -->
                <div class="space-y-4">
                    <h4 class="text-md font-medium text-neutral-700 dark:text-neutral-300">Basic Table</h4>

                    <x-umbra::table>
                        <x-umbra::table.head>
                            <x-umbra::table.row>
                                <x-umbra::table.th>Name</x-umbra::table.th>
                                <x-umbra::table.th>Email</x-umbra::table.th>
                                <x-umbra::table.th>Role</x-umbra::table.th>
                                <x-umbra::table.th align="right">Actions</x-umbra::table.th>
                            </x-umbra::table.row>
                        </x-umbra::table.head>

                        <x-umbra::table.body>
                            <x-umbra::table.row>
                                <x-umbra::table.td>John Doe</x-umbra::table.td>
                                <x-umbra::table.td>john@example.com</x-umbra::table.td>
                                <x-umbra::table.td>
                                    <x-umbra::badge variant="primary">Admin</x-umbra::badge>
                                </x-umbra::table.td>
                                <x-umbra::table.td align="right">
                                    <x-umbra::button class="!px-2 !py-1 !text-xs">Edit</x-umbra::button>
                                </x-umbra::table.td>
                            </x-umbra::table.row>

                            <x-umbra::table.row>
                                <x-umbra::table.td>Jane Smith</x-umbra::table.td>
                                <x-umbra::table.td>jane@example.com</x-umbra::table.td>
                                <x-umbra::table.td>
                                    <x-umbra::badge variant="success">User</x-umbra::badge>
                                </x-umbra::table.td>
                                <x-umbra::table.td align="right">
                                    <x-umbra::button class="!px-2 !py-1 !text-xs">Edit</x-umbra::button>
                                </x-umbra::table.td>
                            </x-umbra::table.row>

                            <x-umbra::table.row selected="true">
                                <x-umbra::table.td>Bob Johnson</x-umbra::table.td>
                                <x-umbra::table.td>bob@example.com</x-umbra::table.td>
                                <x-umbra::table.td>
                                    <x-umbra::badge variant="warning">Moderator</x-umbra::badge>
                                </x-umbra::table.td>
                                <x-umbra::table.td align="right">
                                    <x-umbra::button class="!px-2 !py-1 !text-xs">Edit</x-umbra::button>
                                </x-umbra::table.td>
                            </x-umbra::table.row>
                        </x-umbra::table.body>
                    </x-umbra::table>
                </div>

                <!-- Empty State Table -->
                <div class="space-y-4">
                    <h4 class="text-md font-medium text-neutral-700 dark:text-neutral-300">Empty State</h4>

                    <x-umbra::table size="sm">
                        <x-umbra::table.head>
                            <x-umbra::table.row>
                                <x-umbra::table.th>Orders</x-umbra::table.th>
                                <x-umbra::table.th>Customer</x-umbra::table.th>
                                <x-umbra::table.th align="right">Total</x-umbra::table.th>
                            </x-umbra::table.row>
                        </x-umbra::table.head>

                        <x-umbra::table.body>
                            <x-umbra::table.empty colspan="3">
                                <x-slot name="title">No orders found</x-slot>
                                You haven't received any orders yet.
                                <x-slot name="action">
                                    <x-umbra::button class="!px-3 !py-1 !text-sm">Create Order</x-umbra::button>
                                </x-slot>
                            </x-umbra::table.empty>
                        </x-umbra::table.body>
                    </x-umbra::table>
                </div>
            </div>

            <!-- Cards -->
            <div class="col-span-full space-y-6">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Cards</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Simple Card -->
                    <x-umbra::card>
                        <div class="flex items-center mb-2">
                            <x-umbra::icons.home class="w-5 h-5 mr-2 text-blue-500"/>
                            <h4 class="font-semibold text-neutral-900 dark:text-neutral-50">Simple Card</h4>
                        </div>
                        <p class="text-neutral-600 dark:text-neutral-400 text-sm">Basic card with content and icon.</p>
                    </x-umbra::card>

                    <!-- Card with Header -->
                    <x-umbra::card>
                        <x-slot name="header">
                            <div class="flex items-center">
                                <x-umbra::icons.user class="w-5 h-5 mr-2 text-green-500"/>
                                <h4 class="font-semibold text-neutral-900 dark:text-neutral-50">With Header</h4>
                            </div>
                        </x-slot>
                        <p class="text-neutral-600 dark:text-neutral-400 text-sm">Content with header section and icon.</p>
                    </x-umbra::card>

                    <!-- Card with Footer -->
                    <x-umbra::card>
                        <div class="flex items-center mb-2">
                            <x-umbra::icons.heart class="w-5 h-5 mr-2 text-red-500"/>
                            <h4 class="font-semibold text-neutral-900 dark:text-neutral-50">With Footer</h4>
                        </div>
                        <p class="text-neutral-600 dark:text-neutral-400 text-sm mb-4">Card with action footer and icon.</p>
                        <x-slot name="footer">
                            <x-umbra::button class="!text-xs !px-3 !py-1 flex items-center">
                                <x-umbra::icons.star class="w-3 h-3 mr-1"/>
                                Action
                            </x-umbra::button>
                        </x-slot>
                    </x-umbra::card>

                    <!-- Product Card with Image -->
                    <x-umbra::card class="col-span-full md:col-span-1">
                        <x-slot name="image">
                            <div
                                class="bg-gradient-to-br from-neutral-100 to-neutral-200 dark:from-neutral-800 dark:to-neutral-900 h-48 flex items-center justify-center">
                                <span
                                    class="text-neutral-500 dark:text-neutral-400 text-lg font-medium">Product Image</span>
                            </div>
                        </x-slot>

                        <div class="flex items-center mb-2">
                            <x-umbra::icons.star class="w-6 h-6 mr-2 text-yellow-500"/>
                            <h4 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">UmbraUI Pro</h4>
                        </div>
                        <p class="text-neutral-600 dark:text-neutral-400 mb-4">Premium UI components with advanced
                            features and priority support.</p>
                        <div class="mb-4">
                            <span class="text-2xl font-bold text-neutral-900 dark:text-neutral-50">$0</span>
                            <span class="text-neutral-500 dark:text-neutral-400">/year</span>
                        </div>

                        <x-slot name="footer">
                            <div class="space-y-2">
                                <x-umbra::button class="w-full">FREE</x-umbra::button>
                                <x-umbra::link href="#" class="block text-center text-sm">Learn More
                                </x-umbra::link>
                            </div>
                        </x-slot>
                    </x-umbra::card>
                </div>
            </div>

            <!-- Alerts -->
            <div class="col-span-full space-y-6">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Alerts</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Success Alert -->
                    <x-umbra::alert type="success">
                        <x-slot name="title">Success!</x-slot>
                        Your changes have been saved successfully.
                    </x-umbra::alert>

                    <!-- Error Alert -->
                    <x-umbra::alert type="error">
                        <x-slot name="title">Error occurred</x-slot>
                        Please check your input and try again.
                    </x-umbra::alert>

                    <!-- Warning Alert -->
                    <x-umbra::alert type="warning">
                        <x-slot name="title">Warning</x-slot>
                        This action cannot be undone.
                    </x-umbra::alert>

                    <!-- Info Alert -->
                    <x-umbra::alert type="info">
                        <x-slot name="title">Information</x-slot>
                        New features are available in this release.
                    </x-umbra::alert>
                </div>

                <!-- Dismissible Alert -->
                <x-umbra::alert type="info" dismissible="true">
                    <x-slot name="title">Dismissible Alert</x-slot>
                    Click the × button to dismiss this alert.
                </x-umbra::alert>

                <!-- Alert with Actions -->
                <x-umbra::alert type="warning">
                    <x-slot name="title">Action Required</x-slot>
                    Your subscription expires in 7 days.

                    <x-slot name="actions">
                        <div class="flex gap-2">
                            <x-umbra::button class="text-sm px-3 py-1">Renew Now</x-umbra::button>
                            <x-umbra::link href="#" class="text-sm">Learn More</x-umbra::link>
                        </div>
                    </x-slot>
                </x-umbra::alert>
            </div>

            <!-- Toast Demo -->
            <div class="col-span-full space-y-6">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Toast Notifications</h3>

                <!-- JavaScript Toasts -->
                <div class="space-y-3">
                    <h4 class="text-md font-medium text-neutral-700 dark:text-neutral-300">JavaScript Toast
                        Triggers</h4>
                    <div class="flex gap-4 flex-wrap">
                        <x-umbra::button
                            data-toast-trigger
                            data-toast-type="success"
                            data-toast-message="JavaScript toast success! This was triggered using data attributes."
                            data-toast-title="Success"
                        >JS Success
                        </x-umbra::button>

                        <x-umbra::button
                            data-toast-trigger
                            data-toast-type="error"
                            data-toast-message="JavaScript toast error! Check the console for more details."
                            data-toast-title="Error"
                        >JS Error
                        </x-umbra::button>

                        <x-umbra::button
                            data-toast-trigger
                            data-toast-type="warning"
                            data-toast-message="JavaScript toast warning! Please review your action."
                            data-toast-position="bottom-center"
                            data-toast-duration="3000"
                        >JS Warning
                        </x-umbra::button>

                        <x-umbra::button
                            data-toast-trigger
                            data-toast-type="info"
                            data-toast-message="JavaScript toast info! Here's some useful information."
                        >JS Info
                        </x-umbra::button>
                    </div>
                </div>

                <!-- Server-side Toasts -->
                <div class="space-y-3">
                    <h4 class="text-md font-medium text-neutral-700 dark:text-neutral-300">Server-side Toast Triggers
                        (redirect()->back()->with())</h4>
                    <div class="flex gap-4 flex-wrap">
                        <form method="POST" action="{{ request()->url() }}" style="display: inline;">
                            @csrf
                            <input type="hidden" name="toast_type" value="success">
                            <x-umbra::button type="submit">Server Success</x-umbra::button>
                        </form>

                        <form method="POST" action="{{ request()->url() }}" style="display: inline;">
                            @csrf
                            <input type="hidden" name="toast_type" value="error">
                            <x-umbra::button type="submit">Server Error</x-umbra::button>
                        </form>

                        <form method="POST" action="{{ request()->url() }}" style="display: inline;">
                            @csrf
                            <input type="hidden" name="toast_type" value="warning">
                            <x-umbra::button type="submit">Server Warning</x-umbra::button>
                        </form>

                        <form method="POST" action="{{ request()->url() }}" style="display: inline;">
                            @csrf
                            <input type="hidden" name="toast_type" value="info">
                            <x-umbra::button type="submit">Server Info</x-umbra::button>
                        </form>
                    </div>
                </div>

                <!-- Toast Facade -->
                <div class="space-y-3">
                    <h4 class="text-md font-medium text-neutral-700 dark:text-neutral-300">Toast Facade
                        (Toast::success())</h4>
                    <div class="flex gap-4 flex-wrap">
                        <form method="POST" action="/toast-facade" style="display: inline;">
                            @csrf
                            <input type="hidden" name="toast_type" value="success">
                            <x-umbra::button type="submit">Facade Success</x-umbra::button>
                        </form>

                        <form method="POST" action="/toast-facade" style="display: inline;">
                            @csrf
                            <input type="hidden" name="toast_type" value="error">
                            <x-umbra::button type="submit">Facade Error</x-umbra::button>
                        </form>

                        <form method="POST" action="/toast-facade" style="display: inline;">
                            @csrf
                            <input type="hidden" name="toast_type" value="warning">
                            <x-umbra::button type="submit">Facade Warning</x-umbra::button>
                        </form>

                        <form method="POST" action="/toast-facade" style="display: inline;">
                            @csrf
                            <input type="hidden" name="toast_type" value="info">
                            <x-umbra::button type="submit">Facade Info</x-umbra::button>
                        </form>
                    </div>
                </div>

                <!-- Direct JavaScript Calls -->
                <div class="space-y-3">
                    <h4 class="text-md font-medium text-neutral-700 dark:text-neutral-300">Direct JavaScript Calls</h4>
                    <div class="flex gap-4 flex-wrap">
                        <x-umbra::button onclick="window.umbraToast.success('Direct success message!', 'Success')">
                            Direct Success
                        </x-umbra::button>
                        <x-umbra::button onclick="window.umbraToast.error('Direct error message!', 'Error')">Direct
                            Error
                        </x-umbra::button>
                        <x-umbra::button onclick="window.umbraToast.warning('Direct warning message!')">Direct
                            Warning
                        </x-umbra::button>
                        <x-umbra::button onclick="window.umbraToast.info('Direct info message!')">Direct Info
                        </x-umbra::button>
                    </div>
                </div>
            </div>

            <!-- Advanced Components -->
            <div class="col-span-full space-y-6">
                <h3 class="text-lg font-semibold text-neutral-900 dark:text-neutral-50">Advanced Components</h3>

                <!-- Accordion -->
                <div class="max-w-2xl">
                    <x-umbra::accordion>
                        <x-slot name="title">What is UmbraUI?</x-slot>
                        UmbraUI is a modern UI components library for Laravel applications with Tailwind CSS. It
                        provides accessible, customizable components with dark mode support and Alpine.js integration.
                    </x-umbra::accordion>
                    <x-umbra::accordion>
                        <x-slot name="title">What is UmbraUI?</x-slot>
                        UmbraUI is a modern UI components library for Laravel applications with Tailwind CSS. It
                        provides accessible, customizable components with dark mode support and Alpine.js integration.
                    </x-umbra::accordion>
                    <x-umbra::accordion>
                        <x-slot name="title">What is UmbraUI?</x-slot>
                        UmbraUI is a modern UI components library for Laravel applications with Tailwind CSS. It
                        provides accessible, customizable components with dark mode support and Alpine.js integration.
                    </x-umbra::accordion>
                    <x-umbra::accordion>
                        <x-slot name="title">What is UmbraUI?</x-slot>
                        UmbraUI is a modern UI components library for Laravel applications with Tailwind CSS. It
                        provides accessible, customizable components with dark mode support and Alpine.js integration.
                    </x-umbra::accordion>
                </div>

                <!-- Modal (Professional Alpine.js implementation) -->
                <div class="max-w-2xl space-y-3" x-data="{ isModalOpen: false }">
                    <x-umbra::button @click="isModalOpen = true">Open Modal</x-umbra::button>

                    <div x-show="isModalOpen">
                        <x-umbra::modal :show="true" title="UmbraUI Modal" max-width="lg">
                        <p class="mb-4">
                            Professional, accessible modal implemented with Alpine.js following best practices.
                            Features include:
                        </p>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Focus trapping with automatic focus management</li>
                            <li>Keyboard navigation (Escape, Tab, Enter)</li>
                            <li>ARIA attributes for screen readers</li>
                            <li>Smooth transitions and animations</li>
                            <li>Click outside to close</li>
                        </ul>

                            <x-slot name="footer">
                                <div class="flex justify-end gap-3">
                                    <x-umbra::button @click="isModalOpen = false">
                                        Accept
                                    </x-umbra::button>
                                    <x-umbra::button
                                        @click="isModalOpen = false"
                                        class="!bg-neutral-100 !text-neutral-900 hover:!bg-neutral-200 dark:!bg-neutral-800 dark:!text-neutral-200 dark:hover:!bg-neutral-700"
                                    >
                                        Cancel
                                    </x-umbra::button>
                                </div>
                            </x-slot>
                        </x-umbra::modal>
                    </div>
                </div>

                <!-- Form Fields Example -->
                <div class="max-w-md mx-auto">
                    <div class="space-y-4">
                        <x-umbra::field label="Email Address" error="This field is required">
                            <x-umbra::input type="email" placeholder="Enter your email"/>
                        </x-umbra::field>

                        <x-umbra::field label="Password" helper="Must be at least 8 characters">
                            <x-umbra::input type="password" placeholder="Enter password"/>
                        </x-umbra::field>

                        <div class="flex items-center space-x-2">
                            <x-umbra::checkbox id="remember"/>
                            <x-umbra::label for="remember">Remember me</x-umbra::label>
                        </div>

                        <div class="pt-2">
                            <x-umbra::button class="w-full">Sign In</x-umbra::button>
                        </div>

                        <div class="text-center">
                            <x-umbra::link href="#" class="text-sm">Forgot your password?</x-umbra::link>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Toast Container -->
<x-umbra::toast-container/>

<script src="{{ asset('vendor/umbra/js/toast.js') }}"></script>
</body>
</html>
