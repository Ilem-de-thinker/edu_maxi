 {{-- <header class="app-header">
     <div class="container-fluid flex items-center justify-between">
         <div class="flex items-center gap-2.5">
             <div class="logo-topbar">
                 <!-- Sidenav Menu Brand Logo -->
                 <a href="index.html" class="logo-box">
                     <!-- Light Brand Logo -->
                     <div class="logo-light">
                         <img src="/assets/images/logo.png" class="logo-lg h-6" alt="Light logo">
                         <img src="/assets/images/logo-sm.png" class="logo-sm h-6" alt="Small logo">
                     </div>

                     <!-- Dark Brand Logo -->
                     <div class="logo-dark">
                         <img src="/assets/images/logo-black.png" class="logo-lg h-6" alt="Dark logo">
                         <img src="/assets/images/logo-sm.png" class="logo-sm h-6" alt="Small logo">
                     </div>
                 </a>
             </div>

             <!-- Sidenav Menu Toggle Button -->
             <button id="button-toggle-menu" class="sidenav-toggle-button btn btn-icon">
                 <i class="iconify tabler--menu-4 text-xl"></i>
             </button>

             <!-- Topnav Menu Toggle Button for Horizontal -->
             <div class="topnav-toggle-button">
                 <button type="button" class="hs-collapse-toggle btn topnav-toggle-button"
                     data-hs-collapse="#topnav-menu" id="topnav-menu-collapse" aria-expanded="false"
                     aria-controls="topnav-menu" aria-label="Toggle navigation">
                     <i class="iconify tabler--menu-4 text-xl"></i>
                 </button>
             </div>

             <div id="search-box" class="hidden xl:flex">
                 <div class="input-icon-group">
                     <i
                         class="iconify tabler--search input-icon text-lg text-(--topbar-item-color)/50! placeholder:opacity-50"></i>
                     <input type="search" id="topbar-search"
                         class="form-input w-57.5 border-(--topbar-search-border)! bg-(--topbar-search-bg)! text-(--topbar-item-color)! placeholder:opacity-50"
                         placeholder="Search for something...">
                 </div>
             </div>
             {{-- Mega Menu Here  --}}
 {{-- </div>

         <div class="flex items-center gap-2.5">
             <div id="theme-toggler" class="sm:inline-flex hidden">
                 <div class="topbar-item">
                     <button class="topbar-link btn btn-icon size-8 rounded-full transition-[scale,background]"
                         id="light-dark-mode" type="button">
                         <i
                             class="iconify tabler--moon absolute scale-100 rotate-0 topbar-link-icon transition-all duration-200 dark:scale-0 dark:-rotate-90"></i>
                         <i
                             class="iconify tabler--sun absolute scale-0 rotate-90 topbar-link-icon transition-all duration-200 dark:scale-100 dark:rotate-0"></i>
                     </button>
                 </div>
             </div>

             <div id="notification-dropdown-alert"
                 class="topbar-item hs-dropdown relative inline-flex [--auto-close:inside] [--placement:bottom-right]">
                 <button class="topbar-link hs-dropdown-toggle relative flex items-center" type="button"
                     aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                     <i class="iconify tabler--bell topbar-link-icon"></i>
                     <span class="badge bg-warning absolute -inset-e-px -top-3.25 size-4 rounded text-white">12</span>
                 </button>

                 <div class="hs-dropdown-menu min-w-80 p-0 space-y-0" role="menu" aria-orientation="vertical"
                     aria-labelledby="dropdown-menu">
                     <div class="border-default-300 border-b px-3 py-2">
                         <div class="flex items-center justify-between">
                             <h6 class="text-base font-semibold">Notifications</h6>
                             <a href="#!" class="badge badge-label bg-light text-dark">12 Alerts</a>
                         </div>
                     </div>

                     <div style="max-height: 300px" data-simplebar="">
                         <!-- item 1 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-1">
                             <span class="shrink-0">
                                 <span class="bg-danger/15 text-danger flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--server-bolt text-lg fill-danger"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">Critical alert: Server crash
                                     detected</span>
                                 <br>
                                 <span class="text-xs">30 minutes ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-1">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 2 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-2">
                             <span class="shrink-0">
                                 <span
                                     class="bg-warning/15 text-warning flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--alert-triangle text-lg fill-warning"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">High memory usage on Node A</span>
                                 <br>
                                 <span class="text-xs">10 minutes ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-2">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 3 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-3">
                             <span class="shrink-0">
                                 <span
                                     class="bg-success/15 text-success flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--circle-check text-lg fill-success"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">Backup completed successfully</span>
                                 <br>
                                 <span class="text-xs">1 hour ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-3">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 4 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-4">
                             <span class="shrink-0">
                                 <span
                                     class="bg-primary/15 text-primary flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--user-plus text-lg fill-primary"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">New user registration: Sarah
                                     Miles</span>
                                 <br>
                                 <span class="text-xs">Just now</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-4">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 5 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-5">
                             <span class="shrink-0">
                                 <span
                                     class="bg-danger/15 text-danger flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--bug text-lg fill-danger"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">Bug reported in payment module</span>
                                 <br>
                                 <span class="text-xs">20 minutes ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-5">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 6 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-6">
                             <span class="shrink-0">
                                 <span class="bg-info/15 text-info flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--message-circle text-lg fill-info"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">New comment on Task #142</span>
                                 <br>
                                 <span class="text-xs">15 minutes ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-6">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 7 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-7">
                             <span class="shrink-0">
                                 <span
                                     class="bg-warning/15 text-warning flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--battery-charging text-lg fill-warning"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">Low battery on Device X</span>
                                 <br>
                                 <span class="text-xs">45 minutes ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-7">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 8 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-8">
                             <span class="shrink-0">
                                 <span
                                     class="bg-success/15 text-success flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--cloud-upload text-lg fill-success"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">File upload completed</span>
                                 <br>
                                 <span class="text-xs">1 hour ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-8">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 9 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-9">
                             <span class="shrink-0">
                                 <span
                                     class="bg-primary/15 text-primary flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--calendar text-lg fill-primary"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">Team meeting scheduled at 3 PM</span>
                                 <br>
                                 <span class="text-xs">2 hours ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-9">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 10 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-10">
                             <span class="shrink-0">
                                 <span
                                     class="bg-secondary/15 text-secondary flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--download text-lg fill-secondary"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">Report ready for download</span>
                                 <br>
                                 <span class="text-xs">3 hours ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-10">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 11 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-11">
                             <span class="shrink-0">
                                 <span
                                     class="bg-danger/15 text-danger flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--lock text-lg fill-danger"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">Multiple failed login attempts</span>
                                 <br>
                                 <span class="text-xs">5 hours ago</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-11">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>

                         <!-- item 12 -->
                         <div class="dropdown-item hs-removing:hidden items-start gap-3 px-4.5 py-3 text-wrap"
                             id="notification-12">
                             <span class="shrink-0">
                                 <span class="bg-info/15 text-info flex size-9 items-center justify-center rounded">
                                     <i class="iconify tabler--bell-ringing text-lg fill-info"></i>
                                 </span>
                             </span>
                             <span class="text-default-400 grow">
                                 <span class="font-medium text-body-color">Reminder: Submit your
                                     timesheet</span>
                                 <br>
                                 <span class="text-xs">Today, 9:00 AM</span>
                             </span>
                             <button type="button" class="text-default-400 btn btn-link shrink-0 p-0"
                                 data-hs-remove-element="#notification-12">
                                 <i class="iconify tabler--square-rounded-x text-xl"></i>
                             </button>
                         </div>
                     </div>
                     <!-- end dropdown-->

                     <!-- All-->
                     <a href="javascript:void(0);"
                         class="dropdown-item text-reset border-light justify-center border-t py-3 font-bold underline underline-offset-2">View
                         All Alerts</a>
                 </div>
             </div>

             <div id="fullscreen-toggler" class="md:inline-flex hidden">
                 <div class="topbar-item">
                     <button class="topbar-link btn group size-8 rounded-full" data-toggle="fullscreen"
                         aria-label="Full Screen">
                         <i class="iconify tabler--maximize topbar-link-icon group-[.fullscreen-active]:hidden"></i>
                         <i
                             class="iconify tabler--minimize hidden topbar-link-icon group-[.fullscreen-active]:inline-block"></i>
                     </button>
                 </div>
             </div>

             <div class="xl:inline-flex hidden">
                 <div id="monochrome-toggler" class="topbar-item">
                     <button class="topbar-link btn btn-sm size-8 rounded-full" id="monochrome-mode" type="button"
                         aria-label="Monochrome Mode">
                         <i class="iconify tabler--palette topbar-link-icon"></i>
                     </button>
                 </div> --}}
 {{-- </div>

             <div class="sm:inline-flex hidden">
                 <div class="topbar-item btn-theme-setting">
                     <button class="topbar-link btn btn-icon size-8 rounded-full" type="button"
                         aria-haspopup="dialog" aria-expanded="false" aria-controls="theme-customization"
                         data-hs-overlay="#theme-customization">
                         <i class="iconify tabler--settings topbar-link-icon"></i>
                     </button>
                 </div>
             </div>

             <div id="simple-user-dropdown"
                 class="topbar-item hs-dropdown before:bg-default-700/35 relative inline-flex before:h-4.5 before:w-px before:content-['']">
                 <button class="hs-dropdown-toggle topbar-link ms-2.5 cursor-pointer items-center px-3! flex"
                     aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                     <img src="/assets/images/users/user-1.jpg" alt="user-image" class="size-8 rounded-full lg:me-3">
                     <div class="hidden lg:flex items-center gap-1.5">
                         <h5 class="pro-username">{{ auth()->user()->name }}</h5>
                         <i class="iconify tabler--chevron-down align-middle"></i>
                     </div>
                 </button>

                 <div class="hs-dropdown-menu min-w-48" role="menu" aria-orientation="vertical"
                     aria-labelledby="hs-dropdown-with-icons">
                     <!-- Header -->
                     <div class="py-2 px-3.5">
                         <h6 class="text-xs">Welcome back 👋!</h6>
                     </div>

                     <!-- My Profile -->
                     <a href="{{ route('student.profile') }}" class="dropdown-item" wire:navigate>
                         <i class="iconify tabler--user-circle text-base align-middle"></i>
                         <span class="align-middle">Profile</span>
                     </a>

                     <!-- Notifications -->
                     <a href="javascript:void(0);" class="dropdown-item">
                         <i class="iconify tabler--bell-ringing text-base align-middle"></i>
                         <span class="align-middle">Notifications</span>
                     </a>

                     <!-- Support -->
                     <a href="javascript:void(0);" class="dropdown-item">
                         <i class="iconify tabler--headset text-base align-middle"></i>
                         <span class="align-middle">Support Center</span>
                     </a>

                     <!-- Divider -->
                     <div class="dropdown-divider"></div>

                     <!-- Lock -->
                     <a href="auth-lock-screen.html" class="dropdown-item">
                         <i class="iconify tabler--lock text-base align-middle"></i>
                         <span class="align-middle">Lock Screen</span>
                     </a>

                     <!-- Logout -->
                     <a href="javascript:void(0);" class="dropdown-item font-semibold text-danger">
                         <span class="align-middle">
                             <form method="POST" action="{{ route('logout') }}">
                                 @csrf
                                 <button type="submit" class="dropdown-item text-danger w-full">
                                     <i class="iconify tabler--logout me-1 align-middle text-lg"></i>
                                     <span class="align-middle">Log Out</span>
                                 </button>
                             </form>
                         </span>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </header> --}}
 <header
     class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 sticky top-0 z-30">
     <div class="px-6 py-3.5">
         <div class="flex items-center justify-between">

             <!-- Left Group: Mobile Trigger & Ecosystem Mega Menu -->
             <div class="flex items-center gap-4">
                 <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                     class="text-gray-500 lg:hidden hover:text-gray-600 dark:text-gray-300 focus:outline-none p-1.5 rounded-xl bg-gray-100 dark:bg-gray-800">
                     <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M4 6h16M4 12h16M4 18h16" />
                     </svg>
                 </button>

                 <div class="relative" x-data="{ megaOpen: false }" @click.outside="megaOpen = false">
                     <button @click="megaOpen = !megaOpen"
                         class="inline-flex items-center gap-2 px-3.5 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 rounded-2xl hover:bg-gray-100 dark:hover:bg-gray-800 border border-gray-200/60 dark:border-gray-800 transition shadow-xs">
                         <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                         <span>Ecosystem</span>
                         <svg class="w-4 h-4 text-gray-400 transition-transform duration-200"
                             :class="{ 'rotate-180': megaOpen }" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </button>

                     <div x-cloak x-show="megaOpen" x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                         x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                         class="fixed inset-x-4 top-20 sm:absolute sm:inset-x-auto sm:left-0 sm:top-full mt-3 w-auto sm:w-[680px] p-6 bg-white dark:bg-gray-900 rounded-3xl shadow-2xl border border-gray-200 dark:border-gray-800 z-50 grid grid-cols-1 sm:grid-cols-3 gap-6">
                         <div>
                             <p class="text-xs font-bold uppercase tracking-wider text-blue-600 dark:text-blue-400">Core
                                 Services</p>
                             <ul class="mt-3 space-y-2 text-sm">
                                 <li>
                                     <a href="#"
                                         class="group block p-2.5 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800/80 transition">
                                         <p
                                             class="font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400">
                                             Analytics Engine</p>
                                         <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Real-time event
                                             streams & telemetry.</p>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="group block p-2.5 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800/80 transition">
                                         <p
                                             class="font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400">
                                             Edge Pipelines</p>
                                         <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Distributed
                                             serverless execution.</p>
                                     </a>
                                 </li>
                             </ul>
                         </div>

                         <div>
                             <p class="text-xs font-bold uppercase tracking-wider text-blue-600 dark:text-blue-400">
                                 Developer Toolkit</p>
                             <ul class="mt-3 space-y-2 text-sm">
                                 <li>
                                     <a href="#"
                                         class="group block p-2.5 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800/80 transition">
                                         <p
                                             class="font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400">
                                             API Gateway</p>
                                         <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">REST & GraphQL
                                             schema manager.</p>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="group block p-2.5 rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-800/80 transition">
                                         <p
                                             class="font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400">
                                             Webhooks Console</p>
                                         <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Inspect dispatch
                                             logs & retries.</p>
                                     </a>
                                 </li>
                             </ul>
                         </div>

                         <div
                             class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800/40 p-4 rounded-2xl flex flex-col justify-between border border-blue-100 dark:border-gray-700">
                             <div>
                                 <span
                                     class="inline-block px-2.5 py-0.5 text-[10px] font-bold text-blue-700 dark:text-blue-300 bg-blue-100 dark:bg-blue-900/50 rounded-full">v4.0
                                     Release</span>
                                 <h4 class="mt-2 text-sm font-bold text-gray-900 dark:text-white">AI Copilot Integrated
                                 </h4>
                                 <p class="mt-1 text-xs text-gray-600 dark:text-gray-400">Generate complex queries
                                     directly from prompt context.</p>
                             </div>
                             <a href="#"
                                 class="mt-4 text-xs font-bold text-blue-600 dark:text-blue-400 hover:underline flex items-center gap-1">
                                 Learn more <span>&rarr;</span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Right Utility Group -->
             <div class="flex items-center gap-3">

                 <!-- FIXED THEME SWITCHER -->
                 <button @click="toggleTheme()" type="button"
                     class="p-2.5 text-gray-500 rounded-2xl bg-gray-100 dark:bg-gray-800 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 transition focus:outline-none ring-1 ring-transparent focus:ring-blue-500"
                     title="Toggle Theme">
                     <!-- Sun Icon (shown in dark mode to switch to coffee) -->
                     <svg x-show="theme === 'dark'" x-cloak class="w-5 h-5 text-amber-400" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                     </svg>
                     <!-- Coffee Cup Icon (shown in coffee mode to switch to light) -->
                     <svg x-show="theme === 'coffee'" x-cloak class="w-5 h-5 text-amber-700 dark:text-amber-500"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                     </svg>
                     <!-- Moon Icon (shown in light mode to switch to dark) -->
                     <svg x-show="theme === 'light'" class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                     </svg>
                 </button>

                 <!-- Notification Center -->
                 <div class="relative" x-data="{ notifOpen: false }" @click.outside="notifOpen = false">
                     <button @click="notifOpen = !notifOpen"
                         class="relative p-2.5 text-gray-500 rounded-2xl bg-gray-100 dark:bg-gray-800 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                         <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                         </svg>
                         <span
                             class="absolute top-2 right-2 w-2.5 h-2.5 bg-blue-600 rounded-full ring-2 ring-white dark:ring-gray-900"></span>
                     </button>

                     <div x-cloak x-show="notifOpen" x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                         x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                         class="absolute right-0 mt-3 w-80 sm:w-96 bg-white dark:bg-gray-900 rounded-3xl shadow-2xl border border-gray-200 dark:border-gray-800 z-50 overflow-hidden">
                         <div
                             class="flex items-center justify-between p-4.5 border-b border-gray-100 dark:border-gray-800">
                             <h3 class="font-bold text-gray-900 dark:text-white text-sm">Notifications</h3>
                             <span
                                 class="text-xs font-bold px-2.5 py-0.5 bg-blue-100 text-blue-600 dark:bg-blue-950/60 dark:text-blue-300 rounded-full">2
                                 New</span>
                         </div>
                         <div class="divide-y divide-gray-100 dark:divide-gray-800 max-h-72 overflow-y-auto text-sm">
                             <a href="#"
                                 class="flex gap-3 p-4 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition">
                                 <div
                                     class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center shrink-0">
                                     <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M5 13l4 4L19 7" />
                                     </svg>
                                 </div>
                                 <div>
                                     <p class="text-xs font-bold text-gray-800 dark:text-gray-200">Deploy Successful
                                     </p>
                                     <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Production build v4.0.1
                                         passed all checks.</p>
                                     <span class="text-[10px] text-gray-400 mt-1 block">5m ago</span>
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- User Avatar Menu -->
                 <div class="relative" x-data="{ userMenuOpen: false }" @click.outside="userMenuOpen = false">
                     <button @click="userMenuOpen = !userMenuOpen"
                         class="flex items-center gap-2 p-1 rounded-full hover:ring-2 hover:ring-blue-500/50 transition focus:outline-none">
                         <img class="w-9 h-9 rounded-full object-cover ring-2 ring-gray-200 dark:ring-gray-700"
                             src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                             alt="Ilem Ogban">
                     </button>

                     <div x-cloak x-show="userMenuOpen" x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                         class="absolute right-0 mt-3 w-60 bg-white dark:bg-gray-900 rounded-3xl shadow-2xl border border-gray-200 dark:border-gray-800 z-50 py-2">
                         <div class="px-4 py-3 border-b border-gray-100 dark:border-gray-800">
                             <p class="text-sm font-bold text-gray-900 dark:text-white">Ilem Ogban</p>
                             <p class="text-xs text-gray-500 dark:text-gray-400 truncate">ilem@gocreative.com</p>
                         </div>

                         <div class="py-1 text-sm text-gray-700 dark:text-gray-300 font-medium">
                             <a href="#" @click="profileModalOpen = true; userMenuOpen = false"
                                 class="flex items-center px-4 py-2.5 hover:bg-gray-50 dark:hover:bg-gray-800/60 transition">
                                 <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" />
                                     <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" />
                                 </svg>
                                 View Profile Card
                             </a>
                             <a href="#"
                                 class="flex items-center px-4 py-2.5 hover:bg-gray-50 dark:hover:bg-gray-800/60 transition">
                                 <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" />
                                 </svg>
                                 System Preferences
                             </a>
                         </div>

                         <div class="pt-1 border-t border-gray-100 dark:border-gray-800">
                             <form method="POST" action="{{ route('logout') }}" x-data>
                                 @csrf
                                 <button type="submit"
                                     class="w-full text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800/60 font-medium flex items-center px-3.5 py-3 rounded-2xl transition cursor-pointer">
                                     <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                     </svg>
                                     <span x-show="sidebarExpanded" class="mx-3 truncate">Logout</span>
                                 </button>
                             </form>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </header>
