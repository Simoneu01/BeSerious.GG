@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-red-700 text-white block rounded-md py-2 px-3 text-base font-medium'
            : 'block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-red-500 hover:bg-opacity-75';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
