@props([
    /** @var \App\Models\Article */
    'article'
])

<div {{ $attributes->class(['flex flex-col rounded-lg shadow-lg overflow-hidden']) }}>
    <div class="shrink-0">
        <img class="h-48 w-full object-cover" src="{{ $article->img }}">
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
                    <img class="h-10 w-10 rounded-full" src="{{ $article->author_img }}">
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
