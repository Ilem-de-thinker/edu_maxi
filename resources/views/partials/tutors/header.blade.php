 <header class="app-header">
    <div class="container-fluid flex items-center justify-between">
        <div class="flex items-center gap-2.5">
            <button id="button-toggle-menu" class="sidenav-toggle-button btn btn-icon">
                <i class="iconify tabler--menu-4 text-xl"></i>
            </button>

            <div class="hidden xl:flex">
                <h1 class="text-base font-semibold">Edu Maxi</h1>
            </div>
        </div>

        <div class="flex items-center gap-2.5">
            <div id="theme-toggler" class="sm:inline-flex hidden">
                <div class="topbar-item">
                    <button class="topbar-link btn btn-icon size-8 rounded-full transition-[scale,background]" id="light-dark-mode" type="button">
                        <i class="iconify tabler--moon absolute scale-100 rotate-0 topbar-link-icon transition-all duration-200 dark:scale-0 dark:-rotate-90"></i>
                        <i class="iconify tabler--sun absolute scale-0 rotate-90 topbar-link-icon transition-all duration-200 dark:scale-100 dark:rotate-0"></i>
                    </button>
                </div>
            </div>

            <div class="topbar-item hs-dropdown relative inline-flex [--placement:bottom-right]">
                <button class="topbar-link flex items-center gap-2" type="button" aria-haspopup="menu" aria-expanded="false" aria-label="User menu">
                    <span class="size-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                        <i class="iconify tabler--user text-base"></i>
                    </span>
                    <span class="hidden text-sm font-medium sm:inline">{{ auth()->user()->name }}</span>
                    <i class="iconify tabler--chevron-down"></i>
                </button>

                <div class="hs-dropdown-menu min-w-52 p-1.5" role="menu" aria-orientation="vertical">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger w-full">
                            <i class="iconify tabler--logout me-1 align-middle text-lg"></i>
                            <span class="align-middle">Log Out</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
