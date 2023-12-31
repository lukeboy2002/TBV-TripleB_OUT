<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/26b11da1dc.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    @stack('styles')
    <livewire:styles />
</head>

<body class="antialiased relative bg-white dark:bg-gray-800 max-w-full overflow-x-hidden">
<div class="min-h-screen flex flex-col">
    <div class="z-50">
        <x-messages />
    </div>

    <section class="w-screen mx-auto flex justify-center">
        <nav id="navbar" class="sticky top-0 z-40 w-full bg-white dark:bg-gray-800 shadow-lg">
            <x-theme.header />
            <x-theme.mainmenu />
        </nav>
    </section>

    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
    <main>
        {{ $slot }}

        <!-- Sidebar start-->
        <x-theme.mobilemenu />
    </main>

    <footer class="w-screen mx-auto flex justify-center">
        <x-theme.footer />
    </footer>
</div>

@stack('modals')

<livewire:scripts />
@stack('scripts')
</body>
</html>
