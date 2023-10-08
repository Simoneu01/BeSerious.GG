<x-auth-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="/">
                <x-6ixproject.icon class="h-16 w-16" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input class="mt-1 block w-full" id="password" name="password" type="password" required
                    autocomplete="current-password" autofocus />
            </div>

            <div class="mt-4 flex justify-end">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-auth-layout>
