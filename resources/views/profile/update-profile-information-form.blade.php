<form class="divide-y divide-gray-200 lg:col-span-9" wire:submit.prevent="updateProfileInformation">
    <!-- Profile section -->
    <div class="py-6 px-4 sm:p-6 lg:pb-8">
        <div>
            <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
            <p class="mt-1 text-sm text-gray-500">
                This information will be displayed publicly so be careful what you share.
            </p>
        </div>

        <div class="mt-6 flex flex-col lg:flex-row">
            <div class="grow space-y-6">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">
                        Username
                    </label>
                    <div class="mt-1 rounded-md shadow-sm flex">
                      <span class="bg-gray-50 border border-r-0 border-gray-300 rounded-l-md px-3 inline-flex items-center text-gray-500 sm:text-sm">
                        beserious.gg/
                      </span>
                        <input type="text" name="username" id="username" wire:model.defer="state.username" autocomplete="username" class="focus:ring-red-500 focus:border-red-500 grow block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="username">
                    </div>
                </div>

                <div>
                    <label for="about" class="block text-sm font-medium text-gray-700">
                        {{ __('About') }}
                    </label>
                    <div class="mt-1">
                        <textarea id="about" name="about" rows="3" wire:model.defer="state.about" class="shadow-sm focus:ring-red-500 focus:border-red-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">
                        Brief description for your profile. URLs are hyperlinked.
                    </p>
                </div>
            </div>

            {{--<div x-data="{photoName: null, photoPreview: null}" class="mt-6 grow lg:mt-0 lg:ml-6 lg:grow-0 lg:shrink-0">
                <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                    Photo
                </p>

                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                photoName = $refs.photo.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);
                        " />

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif
            </div>--}}

            <div x-data="{photoName: null, photoPreview: null}" class="mt-6 grow lg:mt-0 lg:ml-6 lg:grow-0 lg:shrink-0">
                <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                    Photo
                </p>

                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                photoName = $refs.photo.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);
                        " />

                <div class="mt-1 lg:hidden">
                    <div class="flex items-center">
                        <div class="shrink-0 inline-block rounded-full overflow-hidden h-12 w-12" aria-hidden="true">
                            <!-- Current Profile Photo -->
                            <div x-show="! photoPreview">
                                <img class="rounded-full w-12 h-12 object-cover" src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}">
                            </div>

                            <!-- New Profile Photo Preview -->
                            <div x-show="photoPreview">
                                <span class="block rounded-full w-12 h-12 object-cover"
                                      x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                                </span>
                            </div>
                        </div>
                        <div class="ml-5 rounded-md flex space-x-3">
                            <button x-on:click.prevent="$refs.photo.click()" type="button" class="shadow-sm bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 inline-flex justify-center text-sm text-gray-700 hover:bg-gray-50 focus:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-red-500">
                                <span>Change</span>
                                <span class="sr-only"> user photo</span>
                            </button>
                            @if ($this->user->profile_photo_path)
                                <button wire:click="deleteProfilePhoto" type="button" class="shadow-sm bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 inline-flex justify-center text-sm text-gray-700 hover:bg-gray-50 focus:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-red-500">
                                    <span>Remove</span>
                                    <span class="sr-only"> user photo</span>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="hidden relative rounded-full overflow-hidden lg:block">
                    <!-- Current Profile Photo -->
                    <div x-show="! photoPreview">
                        <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="relative rounded-full w-40 h-40 object-cover">
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div x-show="photoPreview">
                        <span class="block rounded-full w-40 h-40 object-cover"
                              x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <label for="user-photo" class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                        <span>Change</span>
                        <span class="sr-only"> user photo</span>
                        <div x-on:click.prevent="$refs.photo.click()" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md"></div>
                    </label>
                </div>

                <div class="hidden lg:flex mt-2 justify-center items-center">
                    @if ($this->user->profile_photo_path)
                        <button wire:click="deleteProfilePhoto" type="button" class="shadow-sm bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 inline-flex justify-center text-sm text-gray-700 hover:bg-gray-50 focus:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-red-500">
                            <span>Remove</span>
                            <span class="sr-only"> user photo</span>
                        </button>
                    @endif
                </div>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-12 gap-6">
            <div class="col-span-12 sm:col-span-6">
                <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                <input type="text" name="name" id="name" autocomplete="name" wire:model.defer="state.name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
            </div>

        </div>
    </div>

    <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
        <button type="button" class="bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Annulla
        </button>
        <button type="submit" class="ml-5 bg-red-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Salva
        </button>
    </div>
</form>
