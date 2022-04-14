<x-guest-layout>
    <!-- About -->
    <div class="bg-gray-100">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Cos'è il BeSerious?</h2>
                    <p class="text-xl text-black">BeSerious è il campionato cadetto italiano di Rainbow Six: Siege.<br/>
                    Insieme a <strong>PG Esports</strong> ed <strong>Ubisoft</strong>, BeSerious si concentra a sviluppare il T4 creando un ambiente dove i giovani giocatori di talento ma senza esperienza competitiva
                    possano dimostrare il loro valore e prepararsi a sfidare gli ultimi 2 team in classifica del PG Nationals: R6 all'interno del Relegation. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Classifica -->
    <div class="bg-gray-100">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Classifica</h2>
                    <p class="text-xl text-gray-500">Scopri chi è in testa alla classifica</p>
                </div>
                <div>
                    <div class="space-y-4">
                        <livewire:rankings/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="bg-gray-100 pt-16 lg:py-24">
        <div class="pb-16 bg-red-600 lg:pb-0 lg:z-10 lg:relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
                <div class="relative lg:-my-8">
                    <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                        <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                            <img class="object-cover lg:h-full lg:w-full" src="{{ asset('img/matteo.jpg') }}" alt="prova">
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                        <blockquote>
                            <div>
                                <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                </svg>
                                <p class="mt-6 text-2xl font-medium text-white">
                                    L'idea di BeSerious è nata nel 2019/2020, in due anni siamo riusciti a raggiungere degli obiettivi non da poco, tra cui l'essere la Seconda divisione ufficiale in tutta Europa.
                                    <br/>Siamo fieri del lavoro che stiamo facendo e non siamo intenzionati a fermarci!
                                </p>
                            </div>
                            <footer class="mt-6">
                                <p class="text-base font-medium text-white">Forever.exe</p>
                                <p class="text-base font-medium text-red-100">Co-Founder e COO di BeSerious</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
