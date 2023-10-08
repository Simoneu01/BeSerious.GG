<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}" />
            <x-jet-input class="mt-1 block w-full" id="current_password" type="password"
                wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error class="mt-2" for="current_password" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('New Password') }}" />
            <x-jet-input class="mt-1 block w-full" id="password" type="password" wire:model.defer="state.password"
                autocomplete="new-password" />
            <x-jet-input-error class="mt-2" for="password" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input class="mt-1 block w-full" id="password_confirmation" type="password"
                wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error class="mt-2" for="password_confirmation" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
