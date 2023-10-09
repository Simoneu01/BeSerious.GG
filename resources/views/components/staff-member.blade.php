@props(['member'])
<?php /** @var \App\Models\Staff $member */?>
<div class="space-y-4">
    <div class="aspect-h-2 aspect-w-3">
        <img class="rounded-lg object-cover shadow-lg" src="{{ $member->img_url }}" alt="{{ $member->full_name }}-photo">
    </div>

    <div class="space-y-2">
        <div class="space-y-1 text-lg font-medium leading-6">
            <h3>{{ $member->full_name }}</h3>
            <p class="text-red-600">{{ $member->role }}</p>
        </div>
        <ul class="flex space-x-5">
            @foreach ($member->socials as $social)
                <?php /** @var \App\Enums\SocialEnum $social */?>
                <li>
                    <a class="text-gray-400 hover:text-gray-500" href="{{ $social->url }}">
                        <span class="sr-only">{{ $social->type->getLabel() }}</span>
                        <x-dynamic-component class="{{ $social->type->getClasses() }} h-5 w-5" :component="$social->type->getIcon()" />
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
