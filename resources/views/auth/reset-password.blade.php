<x-auth-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="/">
                <x-6ixproject.icon class="h-16 w-16" />
            </a>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input name="token" type="hidden" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email', $request->email)"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input class="mt-1 block w-full" id="password" name="password" type="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input class="mt-1 block w-full" id="password_confirmation" name="password_confirmation"
                    type="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-auth-layout>
