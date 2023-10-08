@props(['provider', 'createdAt' => null])

<div>
    <div class="flex items-center justify-between pl-3">
        <div class="flex items-center">
            @switch($provider)
                @case(JoelButcher\Socialstream\Providers::facebook())
                    <x-facebook-icon class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::google())
                    <x-google-icon class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::twitter())
                    <x-twitter-icon class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::linkedin())
                    <x-linked-in-icon class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::github())
                    <x-github-icon class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::gitlab())
                    <x-gitlab-icon class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::bitbucket())
                    <x-bitbucket-icon class="mr-2 h-6 w-6" />
                @break

                @case('gameshard')
                    <x-gameshard-icon class="mr-2 h-6 w-6" />
                @break

                @case('discord')
                    <x-discord-icon class="mr-2 h-6 w-6" />
                @break

                @default
            @endswitch

            <div>
                <div class="text-sm font-semibold text-gray-600">
                    {{ __(ucfirst($provider)) }}
                </div>

                @if (!empty($createdAt))
                    <div class="text-xs text-gray-500">
                        Connected {{ $createdAt }}
                    </div>
                @else
                    <div class="text-xs text-gray-500">
                        {{ __('Not connected.') }}
                    </div>
                @endif
            </div>
        </div>

        <div>
            {{ $action }}
        </div>
    </div>

    @error($provider . '_connect_error')
        <div class="mt-2 px-3 text-sm font-semibold text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>
