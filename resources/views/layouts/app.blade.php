<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stane') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg') }}"/>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.7.1/dist/cdn.min.js"></script>
</head>
@if (Auth::check())
<meta name="user_id" content="{{ Auth::user()->id }}" />
@endif

<body class="font-sans antialiased">
    <div class="min-h-screen" id="app">

        <!-- Page Heading -->
        <header class="bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="bg-white">
            {{ $slot }}
        </main>
    </div>
</body>

</html>