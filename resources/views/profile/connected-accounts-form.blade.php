<form class="divide-y divide-gray-200 lg:col-span-9">
    <!-- Connected Account section -->
    <div class="py-6 px-4 sm:p-6 lg:pb-8">
        <div>
            <h2 class="text-lg leading-6 font-medium text-gray-900">
                @if (count($this->accounts) == 0)
                    {{ __('You have no connected accounts.') }}
                @else
                    {{ __('Your connected accounts.') }}
                @endif
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                {{ __('You are free to connect any social accounts to your profile and may remove any connected accounts at any time. If you feel any of your connected accounts have been compromised, you should disconnect them immediately and change your password.') }}
            </p>
        </div>
    </div>


    <div class="py-6 px-4 sm:p-6 lg:pb-8">
        <div class="space-y-6">
            @foreach ($this->providers as $provider)
                @php
                    $account = null;
                    $account = $this->accounts->where('provider', $provider)->first();
                @endphp

                <x-connected-account provider="{{ $provider }}" created-at="{{ $account->created_at ?? null }}">
                    <x-slot name="action">
                        @if (! is_null($account))
                            <div class="flex items-center space-x-6">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos() && ! is_null($account->avatar_path))
                                    <button class="cursor-pointer ml-6 text-sm text-gray-500 focus:outline-none" wire:click="setAvatarAsProfilePhoto({{ $account->id }})">
                                        {{ __('Use Avatar as Profile Photo') }}
                                    </button>
                                @endif

                                @if (($this->accounts->count() > 1 || ! is_null($this->user->password)))
                                    <x-jet-danger-button wire:click="confirmRemove({{ $account->id }})" wire:loading.attr="disabled">
                                        {{ __('Remove') }}
                                    </x-jet-danger-button>
                                @endif
                            </div>
                        @else
                            <x-action-link href="{{ route('oauth.redirect', ['provider' => $provider]) }}">
                                {{ __('Connect') }}
                            </x-action-link>
                        @endif
                    </x-slot>

                </x-connected-account>
            @endforeach
        </div>

        <!-- Logout Other Devices Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingRemove">
            <x-slot name="title">
                {{ __('Remove Connected Account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Please confirm your removal of this account - this action cannot be undone.') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingRemove')" wire:loading.attr="disabled">
                    {{ __('Nevermind') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="removeConnectedAccount({{ $this->selectedAccountId }})" wire:loading.attr="disabled">
                    {{ __('Remove Connected Account') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</form>
