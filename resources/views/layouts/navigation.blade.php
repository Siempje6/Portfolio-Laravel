<nav x-data="{ open: false }" class=" border-gray-100" style="background: #0a0a0a;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <style>
                        .logo {
                            width: 50px;
                            height: 50px;
                            border-radius: 5px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            column-count: 2;
                            column-gap: 2px;
                            background: #1b5515;
                            transition: background 0.3s ease-in-out, transform 0.3s ease-in-out;
                        }

                        .logo:hover {
                            background: white;
                            transform: scale(1.05);
                        }

                        .half-moon-left,
                        .half-moon-right {
                            width: 20px;
                            height: 20px;
                            background: white;
                            transition: background 0.3s ease-in-out;
                        }

                        .half-moon-left {
                            border-top-left-radius: 20px;
                            border-bottom-left-radius: 20px;
                            border-top-right-radius: 20px;
                            margin-bottom: 10px;
                        }

                        .half-moon-right {
                            border-top-right-radius: 20px;
                            border-bottom-right-radius: 20px;
                            border-bottom-left-radius: 20px;
                            margin-top: 10px;
                        }

                        .logo:hover .half-moon-left,
                        .logo:hover .half-moon-right {
                            background: #1b5515;
                        }
                    </style>
                    <a href="{{ route('home') }}">
                        <div class="logo">
                            <p class="half-moon-left"></p>
                            <p class="half-moon-right"></p>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="font-size: 16px; color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: 600;">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <style>
                    .navlist {
                        column-count: 4;
                        gap: 30px;
                        margin-right: 5rem;
                    }

                    .route-nav a.a-hover {
                        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                        color: white;
                        font-weight: 600;
                        text-decoration: none;
                        transition: color 0.2s ease-in-out;
                    }

                    .route-nav a.a-hover:hover {
                        color: #1b5515;
                    }
                </style>

                <div class="navlist">
                    <div class="route-nav"><a class="a-hover" href="#">Work</a></div>
                    <div class="route-nav"><a class="a-hover" href="#">About</a></div>
                    <div class="route-nav"><a class="a-hover" href="#">Blog</a></div>
                    <div class="route-nav"><a class="a-hover" href="#">Contact</a></div>
                </div>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ optional(Auth::user())->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ optional(Auth::user())->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ optional(Auth::user())->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>