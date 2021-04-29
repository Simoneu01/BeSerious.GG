<!-- Hero -->
<div class="relative bg-gray-50 overflow-hidden">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
        <div class="relative h-full max-w-7xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2"
                 width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                 width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
            </svg>
        </div>
    </div>

    <div class="relative pt-6 pb-16 sm:pb-24" x-data="{ isOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="{{ route('welcome') }}">
                            <span class="sr-only">6ixProject</span>
                            <x-6ixproject.red-icon class="h-8 w-auto sm:h-10"/>
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button type="button"
                                    @click="isOpen = !isOpen"
                                    class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500"
                                    aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex md:space-x-10">
                    <a href="{{ route('chi-siamo') }}" class="font-medium text-gray-500 hover:text-gray-900">Chi Siamo</a>

                    <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Be Serious</a>

                    <a href="{{ route('twitch') }}" class="font-medium text-gray-500 hover:text-gray-900">Twitch</a>
                </div>
                <div
                    class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0 space-x-2">
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block z-40">
                        @auth
                            <span class="inline-flex rounded-md shadow">
                                <a href="{{ url('/dashboard') }}"
                                   class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
                                    Dashboard
                                </a>
                            </span>
                        @else
                            <span class="inline-flex rounded-md shadow">
                                <a href="{{ route('login') }}"
                                   class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-red-600 bg-white hover:bg-gray-50">
                                    Log in
                                </a>
                            </span>
                            @if (Route::has('register'))
                                <span class="inline-flex rounded-md shadow">
                                    <a href="{{ route('register') }}"
                                       class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
                                        Registrati
                                    </a>
                                </span>
                            @endif
                        @endauth
                    </div>
                </div>
            </nav>
        </div>

        <div
            x-show="isOpen"
            x-transition:enter="duration-150 ease-out"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="duration-100 ease-in"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"

            class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <x-6ixproject.red-icon class="h-8 w-auto"/>
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                                @click="isOpen = !isOpen"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-2 pt-2 pb-3">
                    <a href="{{ route('chi-siamo') }}"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Chi Siamo</a>

                    <a href="#"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Be Serious</a>

                    <a href="{{ route('twitch') }}"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Twitch</a>
                </div>

                <div class="py-6 px-5 space-y-6">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700">
                            Registrati
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Già registrato?
                            <a href="{{ route('login') }}" class="text-red-600 hover:text-red-500">
                                Accedi
                            </a>
                        </p>
                    @endauth
                </div>
            </div>
        </div>

        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">6ix</span>
                    <span class="block text-red-600 xl:inline">Project</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    La community italiana di Rainbow Six Siege
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    <div class="rounded-md shadow">
                        <a href="#"
                           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10">
                            Scopri di più
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="#"
                           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-red-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                            Be Serious
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
