<div class="flex flex-row items-center justify-between py-4 text-gray-600 dark:text-gray-400">
    <hr class="mr-2 w-full">
    {{ __('Or') }}
    <hr class="ml-2 w-full">
</div>

<div class="flex items-center justify-center">
    @if (JoelButcher\Socialstream\Socialstream::hasBitbucketSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::bitbucket()]) }}">
            <x-socialstream-icons.bitbucket class="mx-2 h-6 w-6" />
            <span class="sr-only">BitBucket</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasFacebookSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::facebook()]) }}">
            <x-socialstream-icons.facebook class="mx-2 h-6 w-6" />
            <span class="sr-only">Facebook</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGithubSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::github()]) }}">
            <x-socialstream-icons.github class="mx-2 h-6 w-6" />
            <span class="sr-only">GitHub</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGitlabSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::gitlab()]) }}">
            <x-socialstream-icons.gitlab class="mx-2 h-6 w-6" />
            <span class="sr-only">GitLab</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGoogleSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::google()]) }}">
            <x-socialstream-icons.google class="mx-2 h-6 w-6" />
            <span class="sr-only">Google</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasLinkedInSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::linkedin()]) }}">
            <x-socialstream-icons.linkedin class="mx-2 h-6 w-6" />
            <span class="sr-only">LinkedIn</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasLinkedInOpenIdSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::linkedinOpenId()]) }}">
            <x-socialstream-icons.linkedin class="mx-2 h-6 w-6" />
            <span class="sr-only">LinkedIn</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasSlackSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::slack()]) }}">
            <x-socialstream-icons.slack class="mx-2 h-6 w-6" />
            <span class="sr-only">Slack</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasTwitterOAuth1Support())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::twitter()]) }}">
            <x-socialstream-icons.twitter class="mx-2 h-6 w-6" />
            <span class="sr-only">Twitter</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasTwitterOAuth2Support())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::twitterOAuth2()]) }}">
            <x-socialstream-icons.twitter class="mx-2 h-6 w-6" />
            <span class="sr-only">Twitter</span>
        </a>
    @endif

    <a href="{{ route('oauth.redirect', ['provider' => 'gameshard']) }}">
        <x-socialstream-icons.gameshard class="h-6 w-6" />
        <span class="sr-only">GameShard</span>
    </a>

    <a href="{{ route('oauth.redirect', ['provider' => 'discord']) }}">
        <x-socialstream-icons.discord class="h-6 w-6" />
        <span class="sr-only">Discord</span>
    </a>
</div>
