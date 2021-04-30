@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-red-700 text-white rounded-md py-2 px-3 text-sm font-medium'
            : 'text-white hover:bg-red-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
