<form class="divide-y divide-gray-200 lg:col-span-9" wire:submit.prevent="setPassword">
    <!-- Password section -->
    <div class="py-6 px-4 sm:p-6 lg:pb-8">
        <div>
            <h2 class="text-lg leading-6 font-medium text-gray-900"> {{ __('Set Password') }}</h2>
            <p class="mt-1 text-sm text-gray-500">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
        </div>

        <div class="mt-6 grid grid-cols-12 gap-6">
            <div class="col-span-6">
                <x-jet-label for="password" value="{{ __('New Password') }}" />
                <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
                <x-jet-input-error for="password" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                <x-jet-input-error for="password_confirmation" class="mt-2" />
            </div>
        </div>
    </div>

    <div class="mt-4 py-4 px-4 flex justify-end sm:px-6 items-center">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Salvato.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled">
            {{ __('Salva') }}
        </x-jet-button>
    </div>
</form>
