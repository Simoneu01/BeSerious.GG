<x-guest-layout>
    <!-- Players -->
    <div class="bg-gray-100">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Teams {{ $team->name }}</h2>
                    <p class="text-xl text-gray-500">Scopri chi fa parte del team {{ $team->name }}</p>
                </div>
                <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
                    @foreach($team->players as $player)
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-9 aspect-h-16">
                                    <img class="object-cover shadow-lg rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-500" src="{{ \App\Models\Team::first()->logo_url }}" alt="">
                                </div>

                                <div class="space-y-2">
                                    <div class="text-lg leading-6 font-medium space-y-1">
                                        <h3>{{ $player->display_name }}</h3>
                                        <p class="text-red-600">{{ ucfirst($player->pivot->role) }}</p>
                                    </div>
                                    <ul class="flex space-x-5">
                                        @foreach($player->socials as $social)
                                            <li>
                                                <a href="{{ $social->url }}" class="text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">{{ $social->type->getLabel() }}</span>
                                                    <x-dynamic-component :component="$social->type->getIcon()" class="h-5 w-5 {{ $social->type->getClasses() }}" />
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
    <x-testimonials/>
</x-guest-layout>
