<!-- Hero -->
<div class="relative overflow-hidden bg-gray-50">
    <div class="hidden sm:absolute sm:inset-y-0 sm:block sm:h-full sm:w-full" aria-hidden="true">
        <div class="relative mx-auto h-full max-w-7xl">
            <svg class="absolute right-full translate-x-1/4 translate-y-1/4 lg:translate-x-1/2" width="404"
                height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20"
                        height="20" patternUnits="userSpaceOnUse">
                        <rect class="text-gray-200" x="0" y="0" width="4" height="4"
                            fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute left-full -translate-x-1/4 -translate-y-3/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20"
                        height="20" patternUnits="userSpaceOnUse">
                        <rect class="text-gray-200" x="0" y="0" width="4" height="4"
                            fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
            </svg>
        </div>
    </div>

    <div class="relative pb-16 pt-6 sm:pb-24" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                <div class="flex flex-1 items-center md:absolute md:inset-y-0 md:left-0">
                    <div class="flex w-full items-center justify-between md:w-auto">
                        <a href="{{ route('welcome') }}">
                            <span class="sr-only">BeSerious</span>
                            <x-beserious.icon class="h-10 sm:h-14 w-auto text-red-600"/>
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button
                                class="inline-flex items-center justify-center rounded-md bg-gray-50 p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500"
                                type="button" aria-expanded="false" @click="isOpen = !isOpen">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex md:space-x-10">
                    <a class="font-medium text-gray-500 hover:text-gray-900" href="{{ route('chi-siamo') }}">Chi
                        Siamo</a>

                    <a class="font-medium text-gray-500 hover:text-gray-900" href="{{ route('campionato.2022') }}">Be
                        Serious 2022</a>

                    <a class="font-medium text-gray-500 hover:text-gray-900" href="{{ route('twitch') }}">Twitch</a>
                </div>
                <div
                    class="hidden space-x-2 md:absolute md:inset-y-0 md:right-0 md:flex md:items-center md:justify-end">
                    <div class="fixed right-0 top-0 z-40 hidden px-6 py-4 sm:block">
                        @if (Route::has('login'))
                            @auth
                                <span class="inline-flex rounded-md shadow">
                                    <a class="inline-flex items-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white hover:bg-red-700"
                                        href="{{ url('/dashboard') }}">
                                        Dashboard
                                    </a>
                                </span>
                            @else
                                <span class="inline-flex rounded-md shadow">
                                    <a class="inline-flex items-center rounded-md border border-transparent bg-white px-4 py-2 text-base font-medium text-red-600 hover:bg-gray-50"
                                        href="{{ route('login') }}">
                                        Log in
                                    </a>
                                </span>
                                @if (Route::has('register'))
                                    <span class="inline-flex rounded-md shadow">
                                        <a class="inline-flex items-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white hover:bg-red-700"
                                            href="{{ route('register') }}">
                                            Registrati
                                        </a>
                                    </span>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>
        </div>

        <div class="absolute inset-x-0 top-0 origin-top-right p-2 transition md:hidden" x-show="isOpen"
            x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
            <div class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
                <div class="flex items-center justify-between px-5 pt-4">
                    <div>
                        <x-beserious.icon class="h-10 w-auto text-red-600"/>
                    </div>
                    <div class="-mr-2">
                        <button
                            class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500"
                            type="button" @click="isOpen = !isOpen">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-2 pb-3 pt-2">
                    <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900"
                        href="{{ route('chi-siamo') }}">Chi Siamo</a>

                    <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900"
                        href="{{ route('campionato.2022') }}">Be Serious 2022</a>

                    <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900"
                        href="{{ route('twitch') }}">Twitch</a>
                </div>

                <div class="space-y-6 px-5 py-6">
                    @auth
                        <a class="flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700"
                            href="{{ url('/dashboard') }}">
                            Dashboard
                        </a>
                    @else
                        @if (Route::has('register'))
                            <a class="flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700"
                                href="{{ route('register') }}">
                                Registrati
                            </a>
                        @endif
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Già registrato?
                            <a class="text-red-600 hover:text-red-500" href="{{ route('login') }}">
                                Accedi
                            </a>
                        </p>
                    @endauth
                </div>
            </div>
        </div>

        <main class="mx-auto mt-16 max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Be</span>
                    <span class="block text-red-600 xl:inline">Serious</span>
                </h1>
                <p class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl">
                    La community italiana di Rainbow Six Siege
                </p>
                <div class="mx-auto mt-5 max-w-md sm:flex sm:justify-center md:mt-8">
                    <div class="rounded-md shadow">
                        <a class="flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-700 md:px-10 md:py-4 md:text-lg"
                            href="#">
                            Scopri di più
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:ml-3 sm:mt-0">
                        <a class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-red-600 hover:bg-gray-50 md:px-10 md:py-4 md:text-lg"
                            href="{{ route('campionato.2022') }}">
                            Campionato 2022
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
