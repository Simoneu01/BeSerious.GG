<x-guest-layout>
    <!-- Blog -->
    <div class="relative bg-gray-100 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-gray-50 h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                    Ultime news
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Ultime news sul sul mondo di Rainbow Six: Siege
                </p>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @foreach($articles as $article)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ $article->img }}" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-red-600">
                                    <a href="#" class="hover:underline">
                                        Articolo
                                    </a>
                                </p>
                                <a href="{{ $article->url }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ $article->title }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        {{ $article->body }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="shrink-0">
                                    <a href="{{ $article->author_link }}">
                                        <span class="sr-only">{{ $article->author }}</span>
                                        <img class="h-10 w-10 rounded-full" src="{{ $article->author_img }}" alt="">
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="{{ $article->author_link }}" class="hover:underline">
                                            {{ $article->author }}
                                        </a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2021-04-19">
                                            {{ $article->created_at->format('d F Y') }}
                                        </time>
                                        <span aria-hidden="true">
                                          &middot;
                                        </span>
                                        <span>
                                          4 min read
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <x-testimonials/>
</x-guest-layout>
