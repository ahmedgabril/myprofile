<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <!-- Scripts -->
        {{-- @livewireStyles --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body{
                font-family: 'Cairo', sans-serif!important;
        
             position: relative;
        
            }
            /* p,a,h1,h2,h3,h4,h5,h6{
        
                color: #fff;
            } */
        </style>
  
    </head>
    <body class="min-h-screen font-sans text-gray-900 bg-gray-400 dark:text-gray-100 antialiasedn dark:bg-gray-700 "
    
    style="{{ app()->getLocale() =='ar' ?'direction:rtl; text-align:right':'' }}"
  >

            <livewire:layout.navigation />
            @include('layouts.dashbord.sidenave')

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="container mx-auto bg-white shadow dark:bg-gray-800">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main class="pt-20 mx-4">
                {{ $slot }}
            </main>
            {{-- @livewireScripts --}}
            <script>


                (function () {
                if (localStorage.theme === 'dark' || (!('theme'
                
                in
                
                localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
                } else {
                document.documentElement.classList.remove('dark');
                };
                
                function setDarkTheme() {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
                };
                
                function setLightTheme() {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
                };
                function setSystemTheme() {
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                setDarkTheme();
                } else {
                setLightTheme();
                }
                }
                
                function onThemeSwitcherItemClick(event) {
                const theme = event.target.dataset.theme;
                
                if (theme === 'system') {
                  localStorage.removeItem('theme');
                  setSystemTheme();
                } else if (theme === 'dark') {
                  setDarkTheme();
                } else {
                  setLightTheme();
                }
                };
                
                const themeSwitcherItems = document.querySelectorAll('#theme-switcher');
                themeSwitcherItems.forEach((item) => {
                item.addEventListener('click', onThemeSwitcherItemClick);
                });
                })();
                </script> 



    </body>
</html>
