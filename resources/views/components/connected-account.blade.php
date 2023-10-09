@props(['provider', 'createdAt' => null])

<div>
    <div class="flex items-center justify-between pl-3">
        <div class="flex items-center">
            @switch($provider)
                @case(JoelButcher\Socialstream\Providers::facebook())
                    <x-socialstream-icons.facebook class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::google())
                    <x-socialstream-icons.google class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::twitter())
                @case(JoelButcher\Socialstream\Providers::twitterOAuth1())

                @case(JoelButcher\Socialstream\Providers::twitterOAuth2())
                    <x-socialstream-icons.twitter class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::linkedin())
                @case(JoelButcher\Socialstream\Providers::linkedinOpenId())
                    <x-socialstream-icons.linkedin class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::github())
                    <x-socialstream-icons.github class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::gitlab())
                    <x-socialstream-icons.gitlab class="mr-2 h-6 w-6" />
                @break

                @case(JoelButcher\Socialstream\Providers::bitbucket())
                    <x-socialstream-icons.bitbucket class="mr-2 h-6 w-6" />
                @break

                @case('gameshard')
                    <x-socialstream-icons.gameshard class="mr-2 h-6 w-6" />
                @break

                @case('discord')
                    <x-socialstream-icons.discord class="mr-2 h-6 w-6" />
                @break

                @default
            @endswitch

            <div>
                <div class="text-sm font-semibold text-gray-600 dark:text-gray-400">
                    {{ __(ucfirst($provider)) }}
                </div>

                @if (!empty($createdAt))
                    <div class="text-xs text-gray-500">
                        {{ __('Connected :createdAt', ['createdAt' => $createdAt]) }}
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
