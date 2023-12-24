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

<body class="antialiased relative bg-white dark:bg-gray-800 max-w-full">
<div class="min-h-screen flex flex-row">
    <div class="z-50">
        <x-messages />
    </div>
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto md:block flex-shrink-0 bg-white dark:bg-gray-800">
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="/">
                TBV-TripleB
            </a>
        </div>

        <div class="px-3 py-4 overflow-y-auto">
            <div class="space-y-2">
                <x-menus.admin-sidebar />
            </div>
        </div>
    </aside>

    <section class="w-screen mx-auto pt-0 flex flex-col">
        <nav id="navbar" class="sticky top-0 z-40 w-full bg-white dark:bg-gray-800 shadow-lg">
            <x-theme.mainmenu />
        </nav>
        <div class="lg:flex-grow p-4">
            @if (isset($header))
            <header>
                <x-cards.default class="mx-auto py-6 px-4 mb-4">
                    <x-theme.heading>{{ $header }}</x-theme.heading>
                </x-cards.default>
            </header>
            @endif
            <main>
                {{ $slot }}
            </main>
        </div>
    </section>
{{--    <x-admin.mobilemenu />--}}
</div>
{{--<body class="antialiased relative bg-white dark:bg-gray-800 max-w-full overflow-x-hidden">--}}
{{--<div class="min-h-screen flex flex-col">--}}
{{--    <div class="z-50">--}}
{{--        <x-messages />--}}
{{--    </div>--}}
{{--    <aside class="z-20 hidden w-64 overflow-y-auto md:block flex-shrink-0 bg-white dark:bg-gray-800">--}}
{{--
{{--    </aside>--}}
{{--    <section class="w-screen mx-auto flex justify-center">--}}
{{--        <nav id="navbar" class="sticky top-0 z-40 w-full bg-white dark:bg-gray-800 shadow-lg">--}}
{{--            <x-theme.mainmenu />--}}
{{--        </nav>--}}
{{--    </section>--}}
{{--    <div class="lg:flex-grow p-4">--}}
{{--        @if (isset($header))--}}
{{--            <header>--}}
{{--                <x-cards.default class="mx-auto py-6 px-4 mb-4">--}}
{{--                    <x-main-layout.heading>{{ $header }}</x-main-layout.heading>--}}
{{--                </x-cards.default>--}}
{{--            </header>--}}
{{--        @endif--}}
{{--        <main>--}}
{{--            {{ $slot }}--}}
{{--        </main>--}}
{{--    </div>--}}
{{--    <x-admin.mobilemenu />--}}
{{--</div>--}}
@stack('modals')

<livewire:scripts />
@stack('scripts')
</body>
</html>
