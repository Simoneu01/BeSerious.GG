@props(['member'])
<?php /** @var \App\Models\Staff $member */?>
<div class="space-y-4">
    <div class="aspect-w-3 aspect-h-2">
        <img class="object-cover shadow-lg rounded-lg" src="{{ $member->img_url }}" alt="">
    </div>

    <div class="space-y-2">
        <div class="text-lg leading-6 font-medium space-y-1">
            <h3>{{ $member->full_name }}</h3>
            <p class="text-indigo-600">{{ $member->role }}</p>
        </div>
        <ul class="flex space-x-5">
            @foreach($member->socials as $social)
                <li>
                    <a href="{{ $social->url }}" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">{{ $social->name->getLabel() }}</span>
                        <x-dynamic-component :component="$social->name->getIcon()" class="h-5 w-5" />
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
