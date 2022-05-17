<div class="divide-y divide-gray-200 lg:col-span-9">
    @if($this->user->password)
        <div class="divide-y divide-gray-200 lg:col-span-9">
            <!-- Password section -->
            <div class="py-6 px-4 sm:p-6 lg:pb-8">
                <div>
                    <h2 class="text-lg leading-6 font-medium text-gray-900">
                        {{ __('Browser Sessions') }}
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        {{ __('Manage and log out your active sessions on other browsers and devices.') }}
                    </p>
                </div>

                <div class="mt-6">
                    <div class="text-sm text-gray-600">
                        {{ __('If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.') }}
                    </div>

                    @if (count($this->sessions) > 0)
                        <div class="mt-5 space-y-6">
                            <!-- Other Browser Sessions -->
                            @foreach ($this->sessions as $session)
                                <div class="flex items-center">
                                    <div>
                                        @if ($session->agent->isDesktop())
                                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                                <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-gray-500">
                                                <path d="M0 0h24v24H0z" stroke="none"></path><rect x="7" y="4" width="10" height="16" rx="1"></rect><path d="M11 5h2M12 17v.01"></path>
                                            </svg>
                                        @endif
                                    </div>

                                    <div class="ml-3">
                                        <div class="text-sm text-gray-600">
                                            {{ $session->agent->platform() }} - {{ $session->agent->browser() }}
                                        </div>

                                        <div>
                                            <div class="text-xs text-gray-500">
                                                {{ $session->ip_address }},

                                                @if ($session->is_current_device)
                                                    <span class="text-emerald-500 font-semibold">{{ __('This device') }}</span>
                                                @else
                                                    {{ __('Last active') }} {{ $session->last_active }}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Log Out Other Devices Confirmation Modal -->
                    <x-jet-dialog-modal wire:model="confirmingLogout">
                        <x-slot name="title">
                            {{ __('Log Out Other Browser Sessions') }}
                        </x-slot>

                        <x-slot name="content">
                            {{ __('Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.') }}

                            <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                                <x-jet-input type="password" class="mt-1 block w-3/4"
                                             placeholder="{{ __('Password') }}"
                                             x-ref="password"
                                             wire:model.defer="password"
                                             wire:keydown.enter="logoutOtherBrowserSessions" />

                                <x-jet-input-error for="password" class="mt-2" />
                            </div>
                        </x-slot>

                        <x-slot name="footer">
                            <x-jet-secondary-button wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                            </x-jet-secondary-button>

                            <x-jet-button class="ml-2"
                                          wire:click="logoutOtherBrowserSessions"
                                          wire:loading.attr="disabled">
                                {{ __('Log Out Other Browser Sessions') }}
                            </x-jet-button>
                        </x-slot>
                    </x-jet-dialog-modal>
                </div>
            </div>

            <div class="mt-4 py-4 px-4 flex justify-end sm:px-6 items-center">
                <x-jet-action-message class="mr-3" on="loggedOut">
                    {{ __('Done.') }}
                </x-jet-action-message>

                <x-jet-button wire:click="confirmLogout" wire:loading.attr="disabled">
                    {{ __('Log Out Other Browser Sessions') }}
                </x-jet-button>
            </div>
        </div>

        <livewire:profile.delete-user-form/>
    @else
        <!-- Connected Account section -->
        <div class="py-6 px-4 sm:p-6 lg:pb-8">
            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">
                    {{ __('Account') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    {{ __('You can not edit account infos, please set a password.') }}
                </p>
            </div>
        </div>

        <div class="py-6 px-4 sm:p-6 lg:pb-8">
            <a href="{{ route('profile.new-password') }}" class="inline-flex bg-red-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 disabled:opacity-25 transition">
                {{ __('Set Password') }}
            </a>
        </div>
    @endif
</div>
