<x-guest-layout>
    <!-- Players -->
    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Teams {{ $team->name }}</h2>
                    <p class="text-xl text-gray-500">Scopri chi fa parte del team {{ $team->name }}</p>
                </div>
                <ul
                    class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
                    @foreach ($team->players as $player)
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-h-16 aspect-w-9">
                                    <img class="rounded-lg object-cover shadow-lg transition delay-150 duration-500 ease-in-out hover:-translate-y-1 hover:scale-110"
                                        src="{{ \App\Models\Team::first()->logo_url }}" alt="">
                                </div>

                                <div class="space-y-2">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>{{ $player->display_name }}</h3>
                                        <p class="text-red-600">{{ ucfirst($player->pivot->role) }}</p>
                                    </div>
                                    <ul class="flex space-x-5">
                                        @foreach ($player->socials as $social)
                                            <li>
                                                <a class="text-gray-400 hover:text-gray-500" href="{{ $social->url }}">
                                                    <span class="sr-only">{{ $social->type->getLabel() }}</span>
                                                    <x-dynamic-component
                                                        class="{{ $social->type->getClasses() }} h-5 w-5"
                                                        :component="$social->type->getIcon()" />
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <x-testimonials />
</x-guest-layout>
