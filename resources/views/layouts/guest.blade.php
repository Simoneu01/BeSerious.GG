<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link type="image/x-icon" href="{{ asset('favicon.ico') }}" rel="shortcut icon">
    <link href="{{ asset('/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link type="image/png" href="{{ asset('/favicon-32x32.png') }}" rel="icon" sizes="32x32">
    <link type="image/png" href="{{ asset('/favicon-16x16.png') }}" rel="icon" sizes="16x16">
    <link href="{{ asset('/site.webmanifest') }}" rel="manifest">

    {!! seo() !!}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if (config('umami.url'))
        <script async src="{{ config('umami.url') }}" data-website-id="{{ config('umami.website_id') }}"></script>
    @endif

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class="font-sans text-gray-900 antialiased dark:text-gray-100">
        <!-- Hero -->
        <x-hero />
        <!-- Slot -->
        {{ $slot }}
        <!-- Footer -->
        <x-footer />
    </div>

    @livewireScripts
</body>

</html>
