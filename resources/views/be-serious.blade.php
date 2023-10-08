<x-guest-layout>
    <!-- Classifica -->
    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Classifica</h2>
                    <p class="text-xl text-gray-500">Scopri chi è in testa alla classifica</p>
                </div>
                <div>
                    <div class="space-y-4">
                        <livewire:rankings />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <x-testimonials />
</x-guest-layout>
