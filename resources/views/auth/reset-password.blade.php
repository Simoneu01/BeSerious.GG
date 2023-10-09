<x-auth-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <a href="/">
                <x-6ixproject.icon class="h-16 w-16" />
            </a>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input name="token" type="hidden" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email', $request->email)"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input class="mt-1 block w-full" id="password" name="password" type="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input class="mt-1 block w-full" id="password_confirmation" name="password_confirmation"
                    type="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-auth-layout>
