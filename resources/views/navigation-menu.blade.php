<nav x-data="{ open: false }" class="bg-red-600 border-b border-red-300 border-opacity-25 lg:border-none">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative h-16 flex items-center justify-between lg:border-b lg:border-red-400 lg:border-opacity-25">
            <div class="px-2 flex items-center lg:px-0">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-beserious.icon class="block h-12 w-12 text-white"/>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden lg:block lg:ml-10">
                    <div class="flex space-x-4">
                        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('campionato.2022') }}" :active="request()->routeIs('welcome')">
                            {{ __('BeSerious') }}
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('predictions') }}" :active="request()->routeIs('predictions')">
                            {{ __('Predictions') }}
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('twitch') }}" :active="request()->routeIs('welcome')">
                            {{ __('Twitch') }}
                        </x-jet-nav-link>
                    </div>
                </div>
            </div>
            <div class="flex-1 px-2 flex justify-center lg:ml-6 lg:justify-end">
                <div class="max-w-lg w-full lg:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative text-gray-400 focus-within:text-gray-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <!-- Heroicon name: solid/search -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="search" disabled class="disabled:bg-gray-300 disabled:cursor-not-allowed block w-full bg-white py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-600 focus:ring-white focus:border-white sm:text-sm" placeholder="Search" type="search" name="search">
                    </div>
                </div>
            </div>
            <div class="flex lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="open = ! open" class="bg-red-600 p-2 rounded-md inline-flex items-center justify-center text-red-200 hover:text-white hover:bg-red-500 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-600 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg :class="{'hidden': open, 'block': ! open }" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg :class="{'block': open, 'hidden': ! open }" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:block lg:ml-4">
                <div class="flex items-center">
                    <button class="cursor-not-allowed bg-red-600 shrink-0 rounded-full p-1 text-red-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-600 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <!-- Settings/Profile Dropdown -->
                    <div class="ml-3 relative shrink-0">
                        <x-jet-dropdown align="right" width="48" contentClasses="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <x-slot name="trigger">
                                <button type="button" class="bg-red-600 rounded-full flex text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-600 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="rounded-full h-8 w-8" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400" tabindex="-1" id="user-menu-item-0">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}" tabindex="-1" id="user-menu-item-1">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                @role('admin')
                                    <div class="block px-4 py-2 text-xs text-gray-400" tabindex="-1" id="user-menu-item-0">
                                        {{ __('Amministrazione') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('filament.pages.dashboard') }}" tabindex="-1" id="user-menu-item-1">
                                        {{ __('Admin') }}
                                    </x-jet-dropdown-link>

                                    <div class="border-t border-gray-100"></div>
                                @endrole


                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         tabindex="-1" id="user-menu-item-2"
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
    <div :class="{'block': open, 'hidden': ! open}" class="lg:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
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
        <div class="pt-4 pb-3 border-t border-red-700">
            <div class="px-5 flex items-center">
                <div class="shrink-0">
                    <img class="rounded-full h-10 w-10" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-red-300">{{ Auth::user()->email }}</div>
                </div>
                <button class="ml-auto bg-red-600 shrink-0 rounded-full p-1 text-red-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-600 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 px-2 space-y-1">
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

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                         tabindex="-1" id="user-menu-item-2"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
