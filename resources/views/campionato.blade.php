<x-guest-layout>
    <!-- Team -->
    <div class="bg-gray-100">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Teams</h2>
                    <p class="text-xl text-gray-500">Scopri chi fa parte del BeSerious 2022</p>
                </div>
                <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
                    @foreach(range(1, 8) as $i)
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-1 aspect-h-1">
                                    <img class="object-cover shadow-lg rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-150 duration-500" src="{{ \App\Models\Team::first()->logo_url }}" alt="">
                                </div>

                                <div class="text-lg leading-6 font-medium">
                                    <h3>{{ \App\Models\Team::first()->name }}</h3>
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
