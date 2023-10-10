<x-guest-layout>
    <!-- Team -->
    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Teams</h2>
                    <p class="text-xl text-gray-500">Scopri chi fa parte del BeSerious 2023</p>
                </div>
                <ul
                    class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
                    @foreach ($teams as $team)
                        <li>
                            <a class="space-y-4" href="{{ route('team.show', $team) }}">
                                <div class="aspect-h-1 aspect-w-1">
                                    <img class="rounded-lg object-cover shadow-lg transition delay-150 duration-500 ease-in-out hover:-translate-y-1 hover:scale-110"
                                        src="{{ $team->logo_url }}" alt="">
                                </div>

                                <div class="text-lg font-medium leading-6">
                                    <h3>{{ $team->name }}</h3>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <x-testimonials />
</x-guest-layout>
