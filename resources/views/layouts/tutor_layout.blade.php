<html
    x-data="dashboardApp()"
    :class="{ 'dark': theme === 'dark' || theme === 'coffee', 'coffee': theme === 'coffee' }"
    @keydown.window.cmd.k.prevent="commandPaletteOpen = true"
    @keydown.window.ctrl.k.prevent="commandPaletteOpen = true"
    class="h-full"
>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Analytics Dashboard</title>
    <!-- Tailwind CSS v4 Browser Script -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        [x-cloak] { display: none !important; }
        /* Custom sleek scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(156, 163, 175, 0.3); border-radius: 9999px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(156, 163, 175, 0.5); }
    </style>
</head>
<body class="h-full font-sans antialiased bg-gray-50 dark:bg-gray-950 text-gray-900 dark:text-gray-100 selection:bg-blue-600 selection:text-white transition-colors duration-200">

    <div class="flex h-screen overflow-hidden pb-16 lg:pb-0">

        <!-- Mobile Sidebar Backdrop -->
        <div
            x-cloak
            x-show="mobileMenuOpen"
            @click="mobileMenuOpen = false"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-40 bg-gray-900/60 backdrop-blur-sm lg:hidden"
        ></div>

        <!-- ================= SIDEBAR ================= -->
        <aside
            :class="{
                'w-64': sidebarExpanded,
                'w-20': !sidebarExpanded,
                'translate-x-0': mobileMenuOpen,
                '-translate-x-full': !mobileMenuOpen
            }"
            class="fixed inset-y-0 z-50 flex flex-col h-screen px-4 py-6 overflow-y-auto bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 transition-all duration-300 ease-in-out lg:static lg:translate-x-0 shrink-0"
        >
            <!-- Logo & Sidebar Toggle -->
            <div class="flex items-center justify-between">
                <a href="#" class="flex items-center gap-3 overflow-hidden px-1">
                    <div class="p-2.5 bg-gradient-to-tr from-blue-600 to-indigo-600 rounded-2xl text-white shrink-0 shadow-lg shadow-blue-500/25">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <span x-show="sidebarExpanded" x-cloak class="font-bold text-xl tracking-tight text-gray-900 dark:text-white truncate">NexusOS</span>
                </a>

                <button
                    @click="sidebarExpanded = !sidebarExpanded"
                    class="hidden lg:flex p-1.5 rounded-xl text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none transition"
                    title="Toggle Sidebar"
                >
                    <svg class="w-5 h-5 transition-transform duration-300" :class="{ 'rotate-180': !sidebarExpanded }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                    </svg>
                </button>
            </div>

            <!-- Command Palette Trigger Button -->
            <button
                @click="commandPaletteOpen = true"
                class="mt-6 flex items-center justify-between w-full px-3.5 py-2.5 text-sm text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-800/80 rounded-2xl hover:bg-gray-200/60 dark:hover:bg-gray-800 transition border border-transparent hover:border-gray-300 dark:hover:border-gray-700"
            >
                <div class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-gray-400 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span x-show="sidebarExpanded" class="truncate font-medium">Quick search...</span>
                </div>
                <kbd x-show="sidebarExpanded" class="hidden sm:inline-block px-1.5 py-0.5 text-[10px] font-semibold text-gray-400 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-md shadow-xs">⌘K</kbd>
            </button>

            <!-- Navigation Links -->
            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav class="space-y-1.5">
                    <a wire:navigate href="{{ route('tutor_dashboard') }}" class="{{ request()->routeIs('tutor_dashboard') ? 'text-blue-600 bg-blue-50/80 dark:bg-blue-950/40 dark:text-blue-400 font-semibold' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800/60 font-medium' }} flex items-center px-3.5 py-3 rounded-2xl transition cursor-pointer">
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        <span x-show="sidebarExpanded" class="mx-3 truncate">Dashboard</span>
                    </a>
                    
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <button type="submit" class="w-full text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800/60 font-medium flex items-center px-3.5 py-3 rounded-2xl transition cursor-pointer">
                            <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                            <span x-show="sidebarExpanded" class="mx-3 truncate">Logout</span>
                        </button>
                    </form>
                </nav>

                <!-- Profile Footer Trigger -->
                <div class="pt-4 border-t border-gray-200 dark:border-gray-800">
                    <button
                        @click="profileModalOpen = true"
                        class="flex items-center w-full p-2.5 rounded-2xl text-left hover:bg-gray-100 dark:hover:bg-gray-800/80 transition group"
                    >
                        <div class="relative shrink-0">
                            <img class="object-cover rounded-full h-10 w-10 ring-2 ring-blue-500/30 group-hover:ring-blue-500 transition" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Ilem Ogban" />
                            <span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white dark:border-gray-900 rounded-full"></span>
                        </div>
                        <div x-show="sidebarExpanded" class="mx-3 overflow-hidden text-left">
                            <p class="text-sm font-bold text-gray-900 dark:text-white truncate">Ilem Ogban</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400 truncate">CTO & Lead Architect</p>
                        </div>
                        <svg x-show="sidebarExpanded" class="w-4 h-4 ml-auto text-gray-400 group-hover:text-gray-600 dark:group-hover:text-gray-200 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        </aside>

        <!-- ================= MAIN WRAPPER ================= -->
        <div class="flex flex-col flex-1 h-screen overflow-x-hidden overflow-y-auto">

            <!-- TOP NAVBAR -->
             @include('partials.tutors.header')

            <!-- EXTRA SOPHISTICATED DASHBOARD MAIN CONTENT -->
            <main class="flex-1 p-6 lg:p-8 space-y-8">

                <!-- Welcome Banner -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-gradient-to-r from-blue-600 to-indigo-700 text-white p-8 rounded-3xl shadow-xl shadow-blue-500/10 relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full text-xs font-bold uppercase tracking-wider mb-3">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            Production Cluster Active
                        </div>
                        <h1 class="text-2xl sm:text-3xl font-black tracking-tight">Welcome back, Ilem 👋</h1>
                        <p class="text-blue-100 text-sm mt-1 max-w-xl">All systems are running at peak throughput. API latency is currently averaging 24ms across 12 edge nodes.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="px-5 py-3 bg-white text-blue-700 hover:bg-blue-50 rounded-2xl font-bold text-sm shadow-lg transition active:scale-95 cursor-pointer">Generate Report</button>
                    </div>
                </div>
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- ================= MOBILE BOTTOM NAVBAR ================= -->
    <nav class="fixed bottom-0 inset-x-0 z-40 bg-white/90 dark:bg-gray-900/90 backdrop-blur-md border-t border-gray-200 dark:border-gray-800 lg:hidden px-4 py-2">
        <div class="flex items-center justify-around">
            <a wire:navigate href="{{ route('tutor_dashboard') }}"
                class="{{ request()->routeIs('tutor_dashboard') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400' }} flex flex-col items-center gap-1 p-1.5 focus:outline-none"
            >
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span class="text-[10px] font-bold">Dashboard</span>
            </a>

            <!-- Center Search Button -->
            <button
                @click="commandPaletteOpen = true"
                class="p-3 bg-blue-600 text-white rounded-full shadow-lg shadow-blue-500/30 -mt-5 border-4 border-white dark:border-gray-950 focus:outline-none"
            >
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </button>
            
            <form method="POST" action="{{ route('logout') }}" class="m-0 p-0" x-data>
                @csrf
                <button type="submit"
                    class="text-gray-500 dark:text-gray-400 flex flex-col items-center gap-1 p-1.5 focus:outline-none"
                >
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    <span class="text-[10px] font-bold">Logout</span>
                </button>
            </form>
        </div>
    </nav>

    <!-- ================= PROFILE MODAL ================= -->
    <div
        x-cloak
        x-show="profileModalOpen"
        class="fixed inset-0 z-50 overflow-y-auto"
        role="dialog" aria-modal="true"
    >
        <div class="flex items-center justify-center min-h-screen px-4 text-center sm:block sm:p-0 z-50">
            <div
                x-show="profileModalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="profileModalOpen = false"
                class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity"
            ></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                x-show="profileModalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white dark:bg-gray-900 rounded-3xl shadow-2xl border border-gray-200 dark:border-gray-800 relative z-10"
            >
                <div class="flex justify-between items-start">
                    <div class="flex items-center gap-4">
                        <img class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-500/20 shadow-md" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Ilem Ogban">
                        <div>
                            <h3 class="text-lg font-black text-gray-900 dark:text-white">Ilem Ogban</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Head of Software Development</p>
                            <span class="inline-flex items-center px-2.5 py-0.5 mt-1.5 text-[10px] font-bold text-emerald-700 bg-emerald-100 dark:bg-emerald-950/60 dark:text-emerald-400 rounded-full">Active Session</span>
                        </div>
                    </div>
                    <button @click="profileModalOpen = false" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 p-1 rounded-xl bg-gray-100 dark:bg-gray-800">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

                <div class="mt-6 pt-4 border-t border-gray-100 dark:border-gray-800 space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Organization</span>
                        <span class="font-bold text-gray-800 dark:text-gray-200">GO Creative</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Authorization</span>
                        <span class="font-bold text-blue-600 dark:text-blue-400">Chief Technology Officer</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500 dark:text-gray-400">Primary Stack</span>
                        <span class="font-bold text-gray-800 dark:text-gray-200">PHP, Laravel, Go, Tailwind v4</span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-3">
                    <button @click="profileModalOpen = false" class="w-full py-3 px-4 text-xs font-bold text-gray-700 dark:text-gray-200 bg-gray-100 dark:bg-gray-800 rounded-2xl hover:bg-gray-200 dark:hover:bg-gray-700 transition">Account Settings</button>
                    <button @click="profileModalOpen = false" class="w-full py-3 px-4 text-xs font-bold text-white bg-blue-600 rounded-2xl hover:bg-blue-700 transition shadow-lg shadow-blue-500/30">Switch Team</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= GLOBAL COMMAND PALETTE ================= -->
    <div
        x-cloak
        x-show="commandPaletteOpen"
        class="fixed inset-0 z-50 overflow-y-auto p-4 sm:p-6 md:p-20"
        role="dialog" aria-modal="true"
    >
        <div
            x-show="commandPaletteOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="commandPaletteOpen = false"
            class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm"
        ></div>

        <div
            x-show="commandPaletteOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="mx-auto max-w-xl transform divide-y divide-gray-100 dark:divide-gray-800 overflow-hidden rounded-3xl bg-white dark:bg-gray-900 shadow-2xl ring-1 ring-black/5 transition-all relative z-10"
        >
            <div class="relative px-4 flex items-center">
                <svg class="w-5 h-5 text-gray-400 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <input type="text" class="h-14 w-full border-0 bg-transparent text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-0 text-sm font-medium" placeholder="Search commands, repositories, or settings...">
                <button @click="commandPaletteOpen = false" class="text-xs bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-lg text-gray-500 font-bold">ESC</button>
            </div>
            <div class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-300">
                <a href="#" @click="commandPaletteOpen = false" class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl hover:bg-blue-50 dark:hover:bg-blue-950/40 text-blue-600 dark:text-blue-400 font-bold transition">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Create New Repository
                </a>
                <a href="#" @click="commandPaletteOpen = false" class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                    <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z"/></svg>
                    Configure Edge Cluster Settings
                </a>
            </div>
        </div>
    </div>

    <script>
        function dashboardApp() {
            return {
                theme: 'light',
                sidebarExpanded: true,
                mobileMenuOpen: false,
                profileModalOpen: false,
                commandPaletteOpen: false,
                currentTab: 'overview',

                init() {
                    const savedTheme = localStorage.getItem('theme');
                    if (savedTheme) {
                        this.theme = savedTheme;
                    } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                        this.theme = 'dark';
                    } else {
                        this.theme = 'light';
                    }
                },

                toggleTheme() {
                    if (this.theme === 'light') {
                        this.theme = 'dark';
                    } else if (this.theme === 'dark') {
                        this.theme = 'coffee';
                    } else {
                        this.theme = 'light';
                    }
                    localStorage.setItem('theme', this.theme);
                }
            }
        }
    </script>
</body>
</html>
