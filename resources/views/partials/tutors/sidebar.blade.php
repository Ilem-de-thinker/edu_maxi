 <aside id="app-menu" class="app-menu">
    <a href="{{ route('tutor_dashboard') }}" class="logo-box">
        <span class="logo logo-light">
            <span class="logo-lg">
                <span class="flex items-center gap-2 font-bold text-white">
                    <i class="iconify tabler--school size-6"></i>
                    Edu Maxi
                </span>
            </span>
        </span>

        <span class="logo logo-dark">
            <span class="logo-lg">
                <span class="flex items-center gap-2 font-bold text-gray-900">
                    <i class="iconify tabler--school size-6"></i>
                    Edu Maxi
                </span>
            </span>
        </span>
    </a>

    <div class="h-topbar justify absolute inset-e-5 top-0 flex items-center">
        <button id="button-hover-toggle">
            <span class="btn-on-hover-icon"></span>
        </button>
    </div>

    <div class="relative min-h-0 grow">
        <div class="size-full" data-simplebar="">
            <div id="user-profile-settings" class="sidenav-user p-5 bg-[url(../images/user-bg-pattern.svg)]">
                <div class="flex items-center justify-between">
                    <a href="#!" class="link-reset flex items-center gap-3">
                        <span class="size-9 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                            <i class="iconify tabler--user text-base"></i>
                        </span>
                        <span class="sidenav-user-name block font-bold text-nowrap">{{ auth()->user()->name }}</span>
                    </a>
                </div>
            </div>

            <div id="sidenav-menu">
                <ul class="side-nav px-2.5 pb-16.5">
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('tutor_dashboard') }}" class="menu-link">
                            <span class="menu-icon"><i class="iconify tabler--dashboard"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
