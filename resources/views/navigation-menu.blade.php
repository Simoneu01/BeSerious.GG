<nav class="border-b border-red-300 border-opacity-25 bg-red-600 lg:border-none" x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between lg:border-b lg:border-red-400 lg:border-opacity-25">
            <div class="flex items-center px-2 lg:px-0">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-6ixproject.white-icon class="block h-8 w-8" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden lg:ml-10 lg:block">
                    <div class="flex space-x-4">
                        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                            {{ __('BeSerious') }}
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                            {{ __('Pickem') }}
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                            {{ __('Twitch') }}
                        </x-jet-nav-link>
                    </div>
                </div>
            </div>
            <div class="flex flex-1 justify-center px-2 lg:ml-6 lg:justify-end">
                <div class="w-full max-w-lg lg:max-w-xs">
                    <label class="sr-only" for="search">Search</label>
                    <div class="relative text-gray-400 focus-within:text-gray-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <!-- Heroicon name: solid/search -->
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input
                            class="block w-full rounded-md border border-transparent bg-white py-2 pl-10 pr-3 leading-5 text-gray-900 placeholder-gray-500 focus:border-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-red-600 sm:text-sm"
                            id="search" name="search" type="search" placeholder="Search">
                    </div>
                </div>
            </div>
            <div class="flex lg:hidden">
                <!-- Mobile menu button -->
                <button
                    class="inline-flex items-center justify-center rounded-md bg-red-600 p-2 text-red-200 hover:bg-red-500 hover:bg-opacity-75 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-red-600"
                    type="button" aria-controls="mobile-menu" aria-expanded="false" @click="open = ! open">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" aria-hidden="true" :class="{ 'hidden': open, 'block': !open }"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" aria-hidden="true" :class="{ 'block': open, 'hidden': !open }"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:ml-4 lg:block">
                <div class="flex items-center">
                    <button
                        class="shrink-0 rounded-full bg-red-600 p-1 text-red-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-red-600">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <!-- Settings/Profile Dropdown -->
                    <div class="relative ml-3 shrink-0">
                        <x-jet-dropdown align="right" width="48"
                            contentClasses="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <x-slot name="trigger">
                                <button
                                    class="flex rounded-full bg-red-600 text-sm text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-red-600"
                                    id="user-menu-button" type="button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}">
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400" id="user-menu-item-0" tabindex="-1">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link id="user-menu-item-1" href="{{ route('profile.show') }}"
                                    tabindex="-1">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                @if (true)
                                    <div class="block px-4 py-2 text-xs text-gray-400" id="user-menu-item-0"
                                        tabindex="-1">
                                        {{ __('Amministrazione') }}
                                    </div>

                                    <x-jet-dropdown-link id="user-menu-item-1"
                                        href="{{ route('filament.pages.dashboard') }}" tabindex="-1">
                                        {{ __('Admin') }}
                                    </x-jet-dropdown-link>

                                    <div class="border-t border-gray-100"></div>
                                @endif

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link id="user-menu-item-2" href="{{ route('logout') }}"
                                        tabindex="-1"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu / Mobile menu, show/hide based on menu state. -->
    <div class="lg:hidden" id="mobile-menu" :class="{ 'block': open, 'hidden': !open }">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-red-700 text-white", Default: "text-white hover:bg-red-500 hover:bg-opacity-75" -->
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                {{ __('BeSerious') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                {{ __('Pickem') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                {{ __('Twitch') }}
            </x-jet-responsive-nav-link>
        </div>
        <div class="border-t border-red-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-red-300">{{ Auth::user()->email }}</div>
                </div>
                <button
                    class="ml-auto shrink-0 rounded-full bg-red-600 p-1 text-red-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-red-600">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Your Profile') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="#">
                    {{ __('Settings') }}
                </x-jet-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link id="user-menu-item-2" href="{{ route('logout') }}" tabindex="-1"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
