<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stane') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('https://tailwindui.com/img/logos/workflow-mark-blue-600.svg') }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.7.1/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</head>
@if (Auth::check())
<meta name="user_id" content="{{ Auth::user()->id }}" />
@endif

@include('layouts.navigation')
<body class="font-sans antialiased">
    <div class="min-h-screen" id="app">
        <!-- Page Heading -->
        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
@include('layouts.footer')

<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
    var navLight = document.getElementById("navigation-light");
    var navDark = document.getElementById("navigation-dark");

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
                navLight.style.display = "none";
                navDark.style.display = "block";
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
                navLight.style.display = "block";
                navDark.style.display = "none";
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
                navLight.style.display = "block";
                navDark.style.display = "none";
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
                navLight.style.display = "none";
                navDark.style.display = "block";
            }
        }

    });
</script>

<style>
</style>

</html>