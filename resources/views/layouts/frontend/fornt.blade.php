<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
@stack('styles')
<style>
    body{
        font-family: 'Cairo', sans-serif!important;

     position: relative;

    }
    /* p,a,h1,h2,h3,h4,h5,h6{

        color: #fff;
    } */
</style>
        <!-- Scripts -->

        @livewireStyles

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased font-extrabold bg-gray-400 dark:bg-gray-900" style="{{ app()->getLocale() =='ar'?'direction:rtl; text-align:right':'direction:ltr' }}"
  
 
        <div class="min-h-screen bg-gray-300">

           @include('layouts.frontend.navbar')
           @include('layouts.frontend.herosection')
         


            <!-- Page Content -->
            <main class="container pt-32 mx-auto">
                @yield('mincon')
                
            </main>


            @include('layouts.frontend.footer')
        </div>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
