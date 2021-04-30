<x-app-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>
    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                <aside class="py-6 lg:col-span-3">
                    <nav class="space-y-1">
                        <!-- Current: "bg-red-50 border-red-500 text-red-700 hover:bg-red-50 hover:text-red-700", Default: "border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900" -->
                        <a href="#" class="bg-red-50 border-red-500 text-red-700 hover:bg-red-50 hover:text-red-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium" aria-current="page">
                            <!--
                              Heroicon name: outline/user-circle

                              Current: "text-red-500 group-hover:text-red-500", Default: "text-gray-400 group-hover:text-gray-500"
                            -->
                            <svg class="text-red-500 group-hover:text-red-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="truncate">
                              Profile
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/cog -->
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="truncate">
                              Account
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/key -->
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                            <span class="truncate">
                              Password
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/bell -->
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="truncate">
                              Notifications
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/credit-card -->
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span class="truncate">
                              Billing
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/view-grid-add -->
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                            </svg>
                            <span class="truncate">
                              Integrations
                            </span>
                        </a>
                    </nav>
                </aside>

                <form class="divide-y divide-gray-200 lg:col-span-9" action="#" method="POST">
                    <!-- Profile section -->
                    <div class="py-6 px-4 sm:p-6 lg:pb-8">
                        <div>
                            <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
                            <p class="mt-1 text-sm text-gray-500">
                                This information will be displayed publicly so be careful what you share.
                            </p>
                        </div>

                        <div class="mt-6 flex flex-col lg:flex-row">
                            <div class="flex-grow space-y-6">
                                <div>
                                    <label for="username" class="block text-sm font-medium text-gray-700">
                                        Username
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm flex">
                                          <span class="bg-gray-50 border border-r-0 border-gray-300 rounded-l-md px-3 inline-flex items-center text-gray-500 sm:text-sm">
                                            workcation.com/
                                          </span>
                                        <input type="text" name="username" id="username" autocomplete="username" class="focus:ring-red-500 focus:border-red-500 flex-grow block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300" value="deblewis">
                                    </div>
                                </div>

                                <div>
                                    <label for="about" class="block text-sm font-medium text-gray-700">
                                        About
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-red-500 focus:border-red-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Brief description for your profile. URLs are hyperlinked.
                                    </p>
                                </div>
                            </div>

                            <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0">
                                <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                                    Photo
                                </p>
                                <div class="mt-1 lg:hidden">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 inline-block rounded-full overflow-hidden h-12 w-12" aria-hidden="true">
                                            <img class="rounded-full h-full w-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixqx=vnr9wYQs7S&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80" alt="">
                                        </div>
                                        <div class="ml-5 rounded-md shadow-sm">
                                            <div class="group relative border border-gray-300 rounded-md py-2 px-3 flex items-center justify-center hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-red-500">
                                                <label for="user_photo" class="relative text-sm leading-4 font-medium text-gray-700 pointer-events-none">
                                                    <span>Change</span>
                                                    <span class="sr-only"> user photo</span>
                                                </label>
                                                <input id="user_photo" name="user_photo" type="file" class="absolute w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden relative rounded-full overflow-hidden lg:block">
                                    <img class="relative rounded-full w-40 h-40" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixqx=vnr9wYQs7S&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80" alt="">
                                    <label for="user-photo" class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                                        <span>Change</span>
                                        <span class="sr-only"> user photo</span>
                                        <input type="file" id="user-photo" name="user-photo" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-12 gap-6">
                            <div class="col-span-12 sm:col-span-6">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                            </div>

                            <div class="col-span-12">
                                <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                                <input type="text" name="url" id="url" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                                <input type="text" name="company" id="company" autocomplete="organization" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Privacy section -->
                    <div class="pt-6 divide-y divide-gray-200">
                        <div class="px-4 sm:px-6">
                            <div>
                                <h2 class="text-lg leading-6 font-medium text-gray-900">Privacy</h2>
                                <p class="mt-1 text-sm text-gray-500">
                                    Ornare eu a volutpat eget vulputate. Fringilla commodo amet.
                                </p>
                            </div>
                            <ul class="mt-2 divide-y divide-gray-200">
                                <li class="py-4 flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">
                                            Available to hire
                                        </p>
                                        <p class="text-sm text-gray-500" id="privacy-option-1-description">
                                            Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.
                                        </p>
                                    </div>
                                    <!-- Enabled: "bg-red-500", Not Enabled: "bg-gray-200" -->
                                    <button type="button" class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" role="switch" aria-checked="true" aria-labelledby="privacy-option-1-label" aria-describedby="privacy-option-1-description">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                    </button>
                                </li>
                                <li class="py-4 flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">
                                            Make account private
                                        </p>
                                        <p class="text-sm text-gray-500" id="privacy-option-2-description">
                                            Pharetra morbi dui mi mattis tellus sollicitudin cursus pharetra.
                                        </p>
                                    </div>
                                    <!-- Enabled: "bg-red-500", Not Enabled: "bg-gray-200" -->
                                    <button type="button" class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" role="switch" aria-checked="false" aria-labelledby="privacy-option-2-label" aria-describedby="privacy-option-2-description">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                    </button>
                                </li>
                                <li class="py-4 flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">
                                            Allow commenting
                                        </p>
                                        <p class="text-sm text-gray-500" id="privacy-option-3-description">
                                            Integer amet, nunc hendrerit adipiscing nam. Elementum ame
                                        </p>
                                    </div>
                                    <!-- Enabled: "bg-red-500", Not Enabled: "bg-gray-200" -->
                                    <button type="button" class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" role="switch" aria-checked="true" aria-labelledby="privacy-option-3-label" aria-describedby="privacy-option-3-description">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                    </button>
                                </li>
                                <li class="py-4 flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">
                                            Allow mentions
                                        </p>
                                        <p class="text-sm text-gray-500" id="privacy-option-4-description">
                                            Adipiscing est venenatis enim molestie commodo eu gravid
                                        </p>
                                    </div>
                                    <!-- Enabled: "bg-red-500", Not Enabled: "bg-gray-200" -->
                                    <button type="button" class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" role="switch" aria-checked="true" aria-labelledby="privacy-option-4-label" aria-describedby="privacy-option-4-description">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                            <button type="button" class="bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Cancel
                            </button>
                            <button type="submit" class="ml-5 bg-red-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()) && ! is_null($user->password))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @else
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.set-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication() && ! is_null($user->password))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (JoelButcher\Socialstream\Socialstream::show())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.connected-accounts-form')
                </div>
            @endif


            @if ( ! is_null($user->password))
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
            @endif

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures() && ! is_null($user->password))
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
