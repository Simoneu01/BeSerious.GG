@props(['active', 'icon'])

@php
    $classes = ($active ?? false)
                ? 'text-red-500 group-hover:text-red-500 shrink-0 -ml-1 mr-3 h-6 w-6'
                : 'text-gray-400 group-hover:text-gray-500 shrink-0 -ml-1 mr-3 h-6 w-6';
@endphp

<a {{
          $attributes->merge()->class([
              'group border-l-4 px-3 py-2 flex items-center text-sm font-medium',
              'border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900' => !$active,
              'bg-red-50 border-red-500 text-red-700 hover:bg-red-50 hover:text-red-700' => $active,
         ])
     }}>

    @isset($icon)
        <x-dynamic-component
            :component="$icon"
            class="{{ $classes }}" aria-hidden="true" />
    @endisset

    <span class="truncate">
      {{ $slot }}
    </span>
</a>
