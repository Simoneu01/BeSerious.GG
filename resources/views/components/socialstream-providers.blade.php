<div class="flex flex-row items-center justify-between py-4 text-gray-500">
    <hr class="mr-2 w-full">
    {{ __('Or') }}
    <hr class="ml-2 w-full">
</div>

<div class="flex items-center justify-center space-x-4">
    @if (JoelButcher\Socialstream\Socialstream::hasFacebookSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::facebook()]) }}">
            <x-facebook-icon class="h-6 w-6" />
            <span class="sr-only">Facebook</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGoogleSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::google()]) }}">
            <x-google-icon class="h-6 w-6" />
            <span class="sr-only">Google</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasTwitterSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::twitter()]) }}">
            <x-twitter-icon class="h-6 w-6" />
            <span class="sr-only">Twitter</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasLinkedInSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::linkedin()]) }}">
            <x-linked-in-icon class="h-6 w-6" />
            <span class="sr-only">LinkedIn</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGithubSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::github()]) }}">
            <x-github-icon class="h-6 w-6" />
            <span class="sr-only">GitHub</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGitlabSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::gitlab()]) }}">
            <x-gitlab-icon class="h-6 w-6" />
            <span class="sr-only">GitLab</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasBitbucketSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::bitbucket()]) }}">
            <x-bitbucket-icon />
            <span class="sr-only">BitBucket</span>
        </a>
    @endif

    <a href="{{ route('oauth.redirect', ['provider' => 'gameshard']) }}">
        <x-gameshard-icon class="h-6 w-6" />
        <span class="sr-only">GameShard</span>
    </a>

    <a href="{{ route('oauth.redirect', ['provider' => 'discord']) }}">
        <x-discord-icon class="h-6 w-6" />
        <span class="sr-only">Discord</span>
    </a>
</div>
