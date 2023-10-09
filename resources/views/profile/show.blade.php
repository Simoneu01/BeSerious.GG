<x-app-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>
    <div class="mx-auto max-w-screen-xl px-4 pb-6 sm:px-6 lg:px-8 lg:pb-16">
        <div class="overflow-hidden rounded-lg bg-white shadow">
            <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-x lg:divide-y-0">
                <aside class="py-6 lg:col-span-3">
                    <nav class="space-y-1">
                        <!-- Current: "bg-red-50 border-red-500 text-red-700 hover:bg-red-50 hover:text-red-700", Default: "border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900" -->
                        <a class="group flex items-center border-l-4 border-red-500 bg-red-50 px-3 py-2 text-sm font-medium text-red-700 hover:bg-red-50 hover:text-red-700"
                            href="#" aria-current="page">
                            <!--
                              Heroicon name: outline/user-circle

                              Current: "text-red-500 group-hover:text-red-500", Default: "text-gray-400 group-hover:text-gray-500"
                            -->
                            <svg class="-ml-1 mr-3 h-6 w-6 shrink-0 text-red-500 group-hover:text-red-500"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="truncate">
                                Profile
                            </span>
                        </a>

                        <a class="group flex items-center border-l-4 border-transparent px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 hover:text-gray-900"
                            href="#">
                            <!-- Heroicon name: outline/cog -->
                            <svg class="-ml-1 mr-3 h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-500"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="truncate">
                                Account
                            </span>
                        </a>

                        <a class="group flex items-center border-l-4 border-transparent px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 hover:text-gray-900"
                            href="#">
                            <!-- Heroicon name: outline/key -->
                            <svg class="-ml-1 mr-3 h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-500"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                            <span class="truncate">
                                Password
                            </span>
                        </a>

                        <a class="group flex items-center border-l-4 border-transparent px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 hover:text-gray-900"
                            href="#">
                            <!-- Heroicon name: outline/bell -->
                            <svg class="-ml-1 mr-3 h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-500"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="truncate">
                                Notifications
                            </span>
                        </a>

                        <a class="group flex items-center border-l-4 border-transparent px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 hover:text-gray-900"
                            href="#">
                            <!-- Heroicon name: outline/credit-card -->
                            <svg class="-ml-1 mr-3 h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-500"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span class="truncate">
                                Billing
                            </span>
                        </a>

                        <a class="group flex items-center border-l-4 border-transparent px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 hover:text-gray-900"
                            href="#">
                            <!-- Heroicon name: outline/view-grid-add -->
                            <svg class="-ml-1 mr-3 h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-500"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                            </svg>
                            <span class="truncate">
                                Integrations
                            </span>
                        </a>
                    </nav>
                </aside>

                <form class="divide-y divide-gray-200 lg:col-span-9" action="#" method="POST">
                    <!-- Profile section -->
                    <div class="px-4 py-6 sm:p-6 lg:pb-8">
                        <div>
                            <h2 class="text-lg font-medium leading-6 text-gray-900">Profile</h2>
                            <p class="mt-1 text-sm text-gray-500">
                                This information will be displayed publicly so be careful what you share.
                            </p>
                        </div>

                        <div class="mt-6 flex flex-col lg:flex-row">
                            <div class="grow space-y-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="username">
                                        Username
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <span
                                            class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm">
                                            workcation.com/
                                        </span>
                                        <input
                                            class="block w-full min-w-0 grow rounded-none rounded-r-md border-gray-300 focus:border-red-500 focus:ring-red-500 sm:text-sm"
                                            id="username" name="username" type="text" value="deblewis"
                                            autocomplete="username">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="about">
                                        About
                                    </label>
                                    <div class="mt-1">
                                        <textarea
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                                            id="about" name="about" rows="3"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Brief description for your profile. URLs are hyperlinked.
                                    </p>
                                </div>
                            </div>

                            <div class="mt-6 grow lg:ml-6 lg:mt-0 lg:shrink-0 lg:grow-0">
                                <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                                    Photo
                                </p>
                                <div class="mt-1 lg:hidden">
                                    <div class="flex items-center">
                                        <div class="inline-block h-12 w-12 shrink-0 overflow-hidden rounded-full"
                                            aria-hidden="true">
                                            <img class="h-full w-full rounded-full"
                                                src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixqx=vnr9wYQs7S&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80"
                                                alt="">
                                        </div>
                                        <div class="ml-5 rounded-md shadow-sm">
                                            <div
                                                class="group relative flex items-center justify-center rounded-md border border-gray-300 px-3 py-2 focus-within:ring-2 focus-within:ring-red-500 focus-within:ring-offset-2 hover:bg-gray-50">
                                                <label
                                                    class="pointer-events-none relative text-sm font-medium leading-4 text-gray-700"
                                                    for="user_photo">
                                                    <span>Change</span>
                                                    <span class="sr-only"> user photo</span>
                                                </label>
                                                <input
                                                    class="absolute h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0"
                                                    id="user_photo" name="user_photo" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative hidden overflow-hidden rounded-full lg:block">
                                    <img class="relative h-40 w-40 rounded-full"
                                        src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixqx=vnr9wYQs7S&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80"
                                        alt="">
                                    <label
                                        class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100"
                                        for="user-photo">
                                        <span>Change</span>
                                        <span class="sr-only"> user photo</span>
                                        <input
                                            class="absolute inset-0 h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0"
                                            id="user-photo" name="user-photo" type="file">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-12 gap-6">
                            <div class="col-span-12 sm:col-span-6">
                                <label class="block text-sm font-medium text-gray-700" for="first_name">First
                                    name</label>
                                <input
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-red-500 focus:outline-none focus:ring-red-500 sm:text-sm"
                                    id="first_name" name="first_name" type="text" autocomplete="given-name">
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label class="block text-sm font-medium text-gray-700" for="last_name">Last
                                    name</label>
                                <input
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-red-500 focus:outline-none focus:ring-red-500 sm:text-sm"
                                    id="last_name" name="last_name" type="text" autocomplete="family-name">
                            </div>

                            <div class="col-span-12">
                                <label class="block text-sm font-medium text-gray-700" for="url">URL</label>
                                <input
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-red-500 focus:outline-none focus:ring-red-500 sm:text-sm"
                                    id="url" name="url" type="text">
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label class="block text-sm font-medium text-gray-700" for="company">Company</label>
                                <input
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-red-500 focus:outline-none focus:ring-red-500 sm:text-sm"
                                    id="company" name="company" type="text" autocomplete="organization">
                            </div>
                        </div>
                    </div>

                    <!-- Privacy section -->
                    <div class="divide-y divide-gray-200 pt-6">
                        <div class="px-4 sm:px-6">
                            <div>
                                <h2 class="text-lg font-medium leading-6 text-gray-900">Privacy</h2>
                                <p class="mt-1 text-sm text-gray-500">
                                    Ornare eu a volutpat eget vulputate. Fringilla commodo amet.
                                </p>
                            </div>
                            <ul class="mt-2 divide-y divide-gray-200">
                                <li class="flex items-center justify-between py-4">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">
                                            Available to hire
                                        </p>
                                        <p class="text-sm text-gray-500" id="privacy-option-1-description">
                                            Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.
                                        </p>
                                    </div>
                                    <!-- Enabled: "bg-red-500", Not Enabled: "bg-gray-200" -->
                                    <button
                                        class="relative ml-4 inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                                        type="button" role="switch" aria-checked="true"
                                        aria-labelledby="privacy-option-1-label"
                                        aria-describedby="privacy-option-1-description">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span
                                            class="inline-block h-5 w-5 translate-x-0 rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                            aria-hidden="true"></span>
                                    </button>
                                </li>
                                <li class="flex items-center justify-between py-4">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">
                                            Make account private
                                        </p>
                                        <p class="text-sm text-gray-500" id="privacy-option-2-description">
                                            Pharetra morbi dui mi mattis tellus sollicitudin cursus pharetra.
                                        </p>
                                    </div>
                                    <!-- Enabled: "bg-red-500", Not Enabled: "bg-gray-200" -->
                                    <button
                                        class="relative ml-4 inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                                        type="button" role="switch" aria-checked="false"
                                        aria-labelledby="privacy-option-2-label"
                                        aria-describedby="privacy-option-2-description">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span
                                            class="inline-block h-5 w-5 translate-x-0 rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                            aria-hidden="true"></span>
                                    </button>
                                </li>
                                <li class="flex items-center justify-between py-4">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">
                                            Allow commenting
                                        </p>
                                        <p class="text-sm text-gray-500" id="privacy-option-3-description">
                                            Integer amet, nunc hendrerit adipiscing nam. Elementum ame
                                        </p>
                                    </div>
                                    <!-- Enabled: "bg-red-500", Not Enabled: "bg-gray-200" -->
                                    <button
                                        class="relative ml-4 inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                                        type="button" role="switch" aria-checked="true"
                                        aria-labelledby="privacy-option-3-label"
                                        aria-describedby="privacy-option-3-description">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span
                                            class="inline-block h-5 w-5 translate-x-0 rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                            aria-hidden="true"></span>
                                    </button>
                                </li>
                                <li class="flex items-center justify-between py-4">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">
                                            Allow mentions
                                        </p>
                                        <p class="text-sm text-gray-500" id="privacy-option-4-description">
                                            Adipiscing est venenatis enim molestie commodo eu gravid
                                        </p>
                                    </div>
                                    <!-- Enabled: "bg-red-500", Not Enabled: "bg-gray-200" -->
                                    <button
                                        class="relative ml-4 inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                                        type="button" role="switch" aria-checked="true"
                                        aria-labelledby="privacy-option-4-label"
                                        aria-describedby="privacy-option-4-description">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span
                                            class="inline-block h-5 w-5 translate-x-0 rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                            aria-hidden="true"></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 flex justify-end px-4 py-4 sm:px-6">
                            <button
                                class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                                type="button">
                                Cancel
                            </button>
                            <button
                                class="ml-5 inline-flex justify-center rounded-md border border-transparent bg-red-700 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                                type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div>
        <div class="mx-auto max-w-7xl py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()) && !is_null($user->password))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @else
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.set-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication() && !is_null($user->password))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            @if (JoelButcher\Socialstream\Socialstream::show())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.connected-accounts-form')
                </div>
            @endif

            @if (!is_null($user->password))
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
            @endif

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures() && !is_null($user->password))
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
