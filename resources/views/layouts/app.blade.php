<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen h-full bg-gray-100 flex flex-col justify-between">
            <div>
                <div class="bg-red-600 pb-32">
                    <livewire:navigation-menu/>

                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="py-10">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                <h1 class="text-3xl font-bold text-white">
                                    {{ $header }}
                                </h1>
                            </div>
                        </header>
                    @endif
                </div>


                <!-- Page Content -->
                <main class="-mt-32">
                    {{ $slot }}
                </main>
            </div>

            <!-- Footer -->
            <x-footer/>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
