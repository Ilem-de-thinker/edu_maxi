 <aside id="app-menu" class="app-menu">
            <!-- Sidenav Menu Brand Logo -->
            <a href="index.html" class="logo-box">
                <!-- Light Brand Logo -->
                <span class="logo logo-light">
                    <span class="logo-lg">
                        <img src="/assets/images/logo.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="/assets/images/logo-sm.png" alt="small logo">
                    </span>
                </span>

                <!-- Dark Brand Logo -->
                <span class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="/assets/images/logo-black.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="/assets/images/logo-sm.png" alt="small logo">
                    </span>
                </span>
            </a>

            <!-- Sidenav Menu Toggle Button -->
            <div class="h-topbar justify absolute inset-e-5 top-0 flex items-center">
                <button id="button-hover-toggle">
                    <span class="btn-on-hover-icon"></span>
                </button>
            </div>

            <!-- Sidenav Menu Item Link -->
            <div class="relative min-h-0 grow">
                <div class="size-full" data-simplebar="">
                    <div id="user-profile-settings" class="sidenav-user p-5 bg-[url(../images/user-bg-pattern.svg)]">
                        <div class="flex items-center justify-between">
                            <div>
                                <a href="#!" class="link-reset">
                                    <img src="/assets/images/users/user-1.jpg" alt="user-image"
                                        class="mb-3 size-9 rounded-full">
                                    <span class="sidenav-user-name block font-bold text-nowrap">{{auth()->user()->name }}</span>
                                </a>
                            </div>

                            <div>
                                <!-- Profile Dropdown Button -->
                                <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                                    <button class="cursor-pointer" aria-haspopup="menu" aria-expanded="false"
                                        aria-label="Dropdown">
                                        <i class="iconify tabler--settings ms-1 size-6 align-middle"></i>
                                    </button>

                                    <div class="hs-dropdown-menu" role="menu" aria-orientation="vertical"
                                        aria-labelledby="hs-dropdown-with-icons">
                                        <!-- Header -->
                                        <div class="py-2 px-3.5">
                                            <h6 class="text-xs">Welcome back 👋!</h6>
                                        </div>

                                        <!-- My Profile -->
                                        <a href="#!" class="dropdown-item">
                                            <i class="iconify tabler--user-circle me-1 align-middle text-lg"></i>
                                            <span class="align-middle">Profile</span>
                                        </a>

                                        <!-- Settings -->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="iconify tabler--settings-2 me-1 align-middle text-lg"></i>
                                            <span class="align-middle">Account Settings</span>
                                        </a>

                                        <!-- Lock -->
                                        <a href="auth-lock-screen.html" class="dropdown-item">
                                            <i class="iconify tabler--lock me-1 align-middle text-lg"></i>
                                            <span class="align-middle">Lock Screen</span>
                                        </a>

                                        <!-- Logout -->
                                        <a href="javascript:void(0);" class="dropdown-item text-danger">
                                            <i class="iconify tabler--logout me-1 align-middle text-lg"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sidenav-menu">
                        <ul class="side-nav hs-accordion-group px-2.5 pb-16.5">
                            <li class="menu-title" data-lang="main">
                                <span>Main</span>
                            </li>
                            <li class="menu-item hs-accordion">
                                <a href="javascript:void(0)" aria-expanded="false" aria-controls="dashboards"
                                    class="hs-accordion-toggle menu-link">
                                    <span class="menu-icon"><i class="iconify tabler--dashboard"></i></span>
                                    <span class="menu-text" data-lang="dashboards">Dashboards</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="sub-menu hs-accordion-content hs-accordion-group hidden">
                                    <li class="menu-item">
                                        <a href="dashboard-ecommerce.html" class="menu-link  ">

                                            <span class="menu-text " data-lang="dashboard-ecommerce">Ecommerce</span>

                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="dashboard-analytics.html" class="menu-link  ">

                                            <span class="menu-text " data-lang="dashboard-analytics">Analytics</span>

                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="index.html" class="menu-link  ">

                                            <span class="menu-text " data-lang="dashboard-projects">Projects</span>

                                        </a>
                                    </li>
                                </ul>
                            </li>

                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
