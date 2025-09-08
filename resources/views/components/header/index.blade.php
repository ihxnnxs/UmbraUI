{{-- resources/views/components/header.blade.php --}}
<header
    x-data="{
        isScrolled: false,
        mobileMenu: false
    }"
    x-init="window.addEventListener('scroll', () => { isScrolled = window.scrollY > 10 })"
    class="fixed top-0 inset-x-0 z-50 transition-all duration-700 ease-out"
>
    <div
        :class="{
            'mx-4 mt-4 rounded-2xl border border-gray-200 dark:border-white/20 shadow-2xl bg-white/90 dark:bg-black/60 backdrop-blur-2xl': isScrolled,
            '': !isScrolled
        }"
        class="mx-auto max-w-7xl transition-all duration-700 ease-out will-change-transform"
    >
        <div
            :class="{ 'h-16': isScrolled, 'h-20': !isScrolled }"
            class="flex justify-between items-center px-6 lg:px-8 transition-all duration-700 ease-out"
        >
            {{-- Logo --}}
            <div class="flex items-center space-x-3">
                <div
                    :class="{ 'w-10 h-10': isScrolled, 'w-12 h-12': !isScrolled }"
                    class="bg-blue-600 rounded-xl flex items-center justify-center shadow-lg transition-all duration-700 ease-out"
                >
                    <span
                        :class="{ 'text-lg': isScrolled, 'text-2xl': !isScrolled }"
                        class="text-white font-black transition-all duration-700 ease-out"
                    >L</span>
                </div>
                <div>
                    <h1
                        :class="{ 'text-xl': isScrolled, 'text-2xl': !isScrolled }"
                        class="text-gray-900 dark:text-white font-bold tracking-tight transition-all duration-700 ease-out"
                    >Lorem</h1>
                    <p
                        :class="{ 'opacity-70 text-[10px]': isScrolled, 'opacity-100 text-xs': !isScrolled }"
                        class="text-gray-600 dark:text-gray-300 transition-all duration-700 ease-out"
                    >Lorem ipsum dolor</p>
                </div>
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center space-x-2 xl:space-x-4">
                <a href="#"
                   class="relative text-gray-700 dark:text-white/80 hover:text-gray-900 dark:hover:text-white font-medium px-4 py-2 rounded-xl transition-all duration-300 hover:bg-gray-100 dark:hover:bg-white/10 group">
                    <span class="relative z-10">Lorem</span>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500/0 to-cyan-500/0 group-hover:from-blue-500/5 group-hover:to-cyan-500/5 dark:group-hover:from-blue-500/10 dark:group-hover:to-cyan-500/10 rounded-xl transition-all duration-300"></div>
                </a>

                <a href="#"
                   class="relative text-gray-700 dark:text-white/80 hover:text-gray-900 dark:hover:text-white font-medium px-4 py-2 rounded-xl transition-all duration-300 hover:bg-gray-100 dark:hover:bg-white/10 group">
                    <span class="relative z-10">Ipsum</span>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500/0 to-cyan-500/0 group-hover:from-blue-500/5 group-hover:to-cyan-500/5 dark:group-hover:from-blue-500/10 dark:group-hover:to-cyan-500/10 rounded-xl transition-all duration-300"></div>
                </a>

                <a href="#"
                   class="relative text-gray-700 dark:text-white/80 hover:text-gray-900 dark:hover:text-white font-medium px-4 py-2 rounded-xl transition-all duration-300 hover:bg-gray-100 dark:hover:bg-white/10 group">
                    <span class="relative z-10">Dolor</span>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500/0 to-cyan-500/0 group-hover:from-blue-500/5 group-hover:to-cyan-500/5 dark:group-hover:from-blue-500/10 dark:group-hover:to-cyan-500/10 rounded-xl transition-all duration-300"></div>
                </a>

                <a href="#"
                   class="relative text-gray-700 dark:text-white/80 hover:text-gray-900 dark:hover:text-white font-medium px-4 py-2 rounded-xl transition-all duration-300 hover:bg-gray-100 dark:hover:bg-white/10 group">
                    <span class="relative z-10">Sit</span>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500/0 to-cyan-500/0 group-hover:from-blue-500/5 group-hover:to-cyan-500/5 dark:group-hover:from-blue-500/10 dark:group-hover:to-cyan-500/10 rounded-xl transition-all duration-300"></div>
                </a>

                {{-- Divider --}}
                <div class="w-px h-8 bg-gray-300 dark:bg-white/20 mx-2"></div>

                {{-- CTA Button --}}
                <a href="#"
                   :class="{ 'px-5 py-2': isScrolled, 'px-6 py-2.5': !isScrolled }"
                   class="relative bg-blue-600 text-white rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25 group overflow-hidden">
                    <span class="relative z-10">Lorem Ipsum</span>
                    <div
                        class="absolute inset-0 bg-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
            </nav>

            {{-- Mobile Menu Button --}}
            <div class="lg:hidden">
                <button
                    @click="mobileMenu = !mobileMenu"
                    :aria-expanded="mobileMenu ? 'true' : 'false'"
                    aria-controls="mobile-menu"
                    aria-label="Toggle navigation"
                    class="relative text-gray-700 dark:text-white p-2 rounded-xl hover:bg-gray-100 dark:hover:bg-white/10 transition-all duration-300"
                >
                    {{-- Hamburger Icon --}}
                    <svg
                        x-show="!mobileMenu"
                        class="w-6 h-6 transition-all duration-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>

                    {{-- Close Icon --}}
                    <svg
                        x-show="mobileMenu"
                        class="w-6 h-6 transition-all duration-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu Fullscreen --}}
    <div
        x-show="mobileMenu"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="mobileMenu = false"
        class="lg:hidden fixed inset-0 bg-black/20 dark:bg-black/50 backdrop-blur-xl z-40"
    >
        {{-- Mobile Menu Content --}}
        <div
            x-show="mobileMenu"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform translate-y-full"
            x-transition:enter-end="transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="transform translate-y-0"
            x-transition:leave-end="transform translate-y-full"
            @click.stop
            id="mobile-menu"
            role="dialog"
            aria-modal="true"
            aria-label="Mobile menu"
            class="fixed inset-x-0 bottom-0 top-20 bg-white/90 dark:bg-gray-900/90 backdrop-blur-2xl overflow-y-auto border-t border-gray-200 dark:border-gray-800"
        >
            {{-- Navigation Menu --}}
            <div class="px-8 pt-32 pb-8 space-y-2">
                <a
                    href="#"
                    @click="mobileMenu = false"
                    class="flex items-center px-6 py-4 text-neutral-700 dark:text-neutral-200 hover:bg-neutral-100/50 dark:hover:bg-neutral-800/50 rounded-2xl transition-colors duration-200 text-lg font-medium group"
                >
                    <svg
                        class="w-6 h-6 mr-4 text-neutral-400 dark:text-neutral-500 group-hover:text-neutral-600 dark:group-hover:text-neutral-300 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Lorem
                </a>

                <a
                    href="#"
                    @click="mobileMenu = false"
                    class="flex items-center px-6 py-4 text-neutral-700 dark:text-neutral-200 hover:bg-neutral-100/50 dark:hover:bg-neutral-800/50 rounded-2xl transition-colors duration-200 text-lg font-medium group"
                >
                    <svg
                        class="w-6 h-6 mr-4 text-neutral-400 dark:text-neutral-500 group-hover:text-neutral-600 dark:group-hover:text-neutral-300 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Ipsum
                </a>

                <a
                    href="#"
                    @click="mobileMenu = false"
                    class="flex items-center px-6 py-4 text-neutral-700 dark:text-neutral-200 hover:bg-neutral-100/50 dark:hover:bg-neutral-800/50 rounded-2xl transition-colors duration-200 text-lg font-medium group"
                >
                    <svg
                        class="w-6 h-6 mr-4 text-neutral-400 dark:text-neutral-500 group-hover:text-neutral-600 dark:group-hover:text-neutral-300 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Dolor
                </a>

                <a
                    href="#"
                    @click="mobileMenu = false"
                    class="flex items-center px-6 py-4 text-neutral-700 dark:text-neutral-200 hover:bg-neutral-100/50 dark:hover:bg-neutral-800/50 rounded-2xl transition-colors duration-200 text-lg font-medium group"
                >
                    <svg
                        class="w-6 h-6 mr-4 text-neutral-400 dark:text-neutral-500 group-hover:text-neutral-600 dark:group-hover:text-neutral-300 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    Sit
                </a>

                {{-- CTA Button --}}
                <div class="pt-8">
                    <a
                        href="#"
                        @click="mobileMenu = false"
                        class="flex items-center justify-center w-full px-8 py-4 bg-neutral-900 dark:bg-neutral-100 text-neutral-100 dark:text-neutral-900 font-semibold rounded-2xl transition-all duration-300 hover:scale-105 text-lg"
                    >
                        Lorem Ipsum
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Spacer for fixed header --}}
<div class="h-20"></div>
