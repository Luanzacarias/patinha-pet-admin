<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Quicksand:wght@100;300;400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
     
    @vite(['resources/css/app.css', 'resources/js/app.js',  'resources/js/searchtable.js'])
    @stack('styles')

</head>

<body class="font-sans antialiased " style="background:#E4EBED" >
    <div class="flex flex-col min-h-screen">
        @include('layouts.components.navbar')
        <div class="flex flex-1">
            @include('layouts.components.sidebar') 
            <div class="flex-1 p-6">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
