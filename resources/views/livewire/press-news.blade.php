<div>
    <div class="relative bg-gray-50 px-4 pb-20 pt-16 sm:px-6 lg:px-8 lg:pb-28 lg:pt-24">
        <div class="absolute inset-0">
            <div class="h-1/3 bg-gray-50 sm:h-2/3"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Ultime news
                </h2>
                <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
                    Ultime news sul sul mondo di Rainbow Six: Siege
                </p>
            </div>
            <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                @foreach ($articles as $article)
                    <x-article :article="$article" wire:key="{{ $loop->index }}" />
                @endforeach
            </div>

            <div class="mt-4">
                {{ $articles->links(data: ['scrollTo' => false]) }}
            </div>
        </div>
    </div>
</div>
