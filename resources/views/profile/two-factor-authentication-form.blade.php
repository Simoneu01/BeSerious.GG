<div class="divide-y divide-gray-200 lg:col-span-9">
    <!-- Connected Account section -->
    <div class="py-6 px-4 sm:p-6 lg:pb-8">
        <div>
            <h2 class="text-lg leading-6 font-medium text-gray-900">
                {{ __('Two Factor Authentication') }}
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                {{ __('Add additional security to your account using two factor authentication.') }}
            </p>
        </div>
    </div>


    <div class="py-6 px-4 sm:p-6 lg:pb-8">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                {{ __('You have enabled two factor authentication.') }}
            @elseif($this->user->password)
                {{ __('You have not enabled two factor authentication.') }}
            @else
                {{ __('You can not enable two factor authentication, please set a password.') }}
            @endif
        </h3>

        @if ($this->user->password)
            <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>
                    {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
                </p>
            </div>
        @endif

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
                    </p>
                </div>

                <div class="mt-4 dark:p-4 dark:w-56 dark:bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        @if ($this->user->password)
            <div class="mt-5">
                @if (! $this->enabled)
                    <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                        <x-jet-button type="button" wire:loading.attr="disabled">
                            {{ __('Enable') }}
                        </x-jet-button>
                    </x-jet-confirms-password>
                @else
                    @if ($showingRecoveryCodes)
                        <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                            <x-jet-secondary-button class="mr-3">
                                {{ __('Regenerate Recovery Codes') }}
                            </x-jet-secondary-button>
                        </x-jet-confirms-password>
                    @else
                        <x-jet-confirms-password wire:then="showRecoveryCodes">
                            <x-jet-secondary-button class="mr-3">
                                {{ __('Show Recovery Codes') }}
                            </x-jet-secondary-button>
                        </x-jet-confirms-password>
                    @endif

                    <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-jet-danger-button wire:loading.attr="disabled">
                            {{ __('Disable') }}
                        </x-jet-danger-button>
                    </x-jet-confirms-password>
                @endif
            </div>
        @else
            <div class="mt-5">
                <a href="{{ route('profile.new-password') }}" class="inline-flex bg-red-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 disabled:opacity-25 transition">
                    {{ __('Set Password') }}
                </a>
            </div>
        @endif
    </div>
</div>



