<x-guest-layout>
    <div class="bg-gray-100">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24 space-y-12">
            <!-- About -->
            <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-2xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Cos'è il BeSerious?</h2>
                    <p class="text-xl text-black">BeSerious è il campionato cadetto italiano di Rainbow Six: Siege.<br/>
                        Insieme a <strong>PG Esports</strong> ed <strong>Ubisoft</strong>, BeSerious si concentra a sviluppare il T4 creando un ambiente dove i giovani giocatori di talento ma senza esperienza competitiva
                        possano dimostrare il loro valore e prepararsi a sfidare gli ultimi due team in classifica del PG Nationals: R6 all'interno del Relegation.
                    </p>
                </div>

            <!-- Team -->
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Teams</h2>
                    <p class="text-xl text-gray-500">Scopri chi fa parte del BeSerious 2023</p>
                </div>
                <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
                    @forelse($teams as $team)
                        <li>
                            <a class="space-y-4" href="{{ route('team.show', $team) }}">
                                <div class="aspect-w-1 aspect-h-1">
                                    <img class="object-cover shadow-lg rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-500" src="{{ $team->logo_url }}" alt="">
                                </div>

                                <div class="text-lg leading-6 font-medium">
                                    <h3>{{ $team->name }}</h3>
                                </div>
                            </a>
                        </li>
                    @empty
                       <p class="text-xl text-gray-500">
                           Ancora nessun partecipante!
                       </p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <x-testimonials/>
</x-guest-layout>
