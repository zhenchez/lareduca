<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme="dark" suppressHydrationWarning>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prime Education</title>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="flex h-screen w-screen flex-1 flex-row">

        <livewire:layouts.sidebar.sidebar />


        <main class="flex w-5/6 flex-col overflow-y-auto bg-white text-black p-2">
            {{ $slot }}
            @stack('modals')
        </main>

    </div>
    @livewireScripts
</body>

</html>