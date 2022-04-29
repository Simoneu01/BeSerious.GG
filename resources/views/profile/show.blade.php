<x-app-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>
    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                <aside class="py-6 lg:col-span-3">
                    <nav class="space-y-1">

                        <x-profile.sidebar-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" icon="heroicon-o-user-circle">
                            Profile
                        </x-profile.sidebar-link>

                        <x-profile.sidebar-link :active="false" icon="heroicon-o-cog">
                            Account
                        </x-profile.sidebar-link>

                        <x-profile.sidebar-link href="{{ route('profile.show.password') }}" :active="request()->routeIs(['profile.show.password', 'profile.show.new-password'])" icon="heroicon-o-key">
                            Password
                        </x-profile.sidebar-link>

                        <x-profile.sidebar-link :active="false" icon="heroicon-o-bell">
                            Notifications
                        </x-profile.sidebar-link>

                        <x-profile.sidebar-link :active="false" icon="heroicon-o-credit-card">
                            Billing
                        </x-profile.sidebar-link>

                        <x-profile.sidebar-link :active="false" icon="heroicon-o-view-grid-add">
                            Integrations
                        </x-profile.sidebar-link>
                    </nav>
                </aside>

                {{ $slot }}
            </div>
        </div>
    </div>

    {{--<div>
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
    </div>--}}
</x-app-layout>
