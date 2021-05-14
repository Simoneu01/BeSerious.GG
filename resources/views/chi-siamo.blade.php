<x-guest-layout>
    <!-- Team -->
    <div class="bg-gray-50">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Il nostro team</h2>
                    <p class="text-xl text-gray-500">Scopri il team che c'è dietro a 6ixProject!</p>
                </div>
                <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                    @foreach($staffMembers as $member)
                        <li>
                            <x-staff-member :member="$member"/>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
