<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
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
  
        @livewireStyles
        @stack('csscode')
    </head>
    <body class="font-sans antialiased bg-gray-300 dark:bg-neutral-700 "
    style="{{ LaravelLocalization::getCurrentLocaleDirection() =='rtl' ?'direction:rtl; text-align:right':'direction:ltr; text-align:left' }} >
        <div class="min-h-screen bg-gray-300 dark:bg-gray-900">
            <livewire:layout.navigation />
            {{-- @include('layouts.dashbord.navbar')
            @include('layouts.dashbord.sidenave') --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow dark:bg-gray-800">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="container px-4 pt-10 mx-auto">
              {{-- @yield('mansection') --}}
              {{ $slot }}
            </main>
        </div>
        @livewireScripts() 

        @stack('jscode')



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
