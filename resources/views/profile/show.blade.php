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
                            <svg class="text-red-500 group-hover:text-red-500 shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="truncate">
                              Profile
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/cog -->
                            <svg class="text-gray-400 group-hover:text-gray-500 shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="truncate">
                              Account
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/key -->
                            <svg class="text-gray-400 group-hover:text-gray-500 shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                            <span class="truncate">
                              Password
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/bell -->
                            <svg class="text-gray-400 group-hover:text-gray-500 shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="truncate">
                              Notifications
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/credit-card -->
                            <svg class="text-gray-400 group-hover:text-gray-500 shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span class="truncate">
                              Billing
                            </span>
                        </a>

                        <a href="#" class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
                            <!-- Heroicon name: outline/view-grid-add -->
                            <svg class="text-gray-400 group-hover:text-gray-500 shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                            </svg>
                            <span class="truncate">
                              Integrations
                            </span>
                        </a>
                    </nav>
                </aside>

                @livewire('profile.update-profile-information-form')
            </div>
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
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
