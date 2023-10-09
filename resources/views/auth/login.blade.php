<x-auth-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <a href="/">
                <x-6ixproject.icon class="h-16 w-16" />
            </a>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email')" required
                    autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input class="mt-1 block w-full" id="password" name="password" type="password" required
                    autocomplete="current-password" />
            </div>

            <div class="mt-4 block">
                <label class="flex items-center" for="remember_me">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mt-4 flex items-center justify-end">
                @if (Route::has('password.request'))
                    <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        @if (JoelButcher\Socialstream\Socialstream::show())
            <x-socialstream />
        @endif
    </x-authentication-card>
</x-auth-layout>
