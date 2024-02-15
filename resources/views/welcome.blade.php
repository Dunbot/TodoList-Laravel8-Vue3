<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div id="app">
            <app></app> <!--Aqui esta nuestra vista app de vue-->
        </div>
        
   
    </body>
    <script type="module" src="{{ asset('resources/js/app.js') }}"></script> <!-- Usaremos webpack mix par que actualicr automaticamentte-->
</html>
