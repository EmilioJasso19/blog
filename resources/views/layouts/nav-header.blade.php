<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Route::currentRouteName() ? ucwords(str_replace('-', ' ', Route::currentRouteName())) : '' }}</title>
    <style>
        .active {
            text-decoration: none;
            color: green;
        }
        input, textarea {
            display: block;
        }
    </style>
</head>
<body>
<x-app-layout>

    <?php
        function activeMenu($url) {
            request()->is($url) ? 'active' : '';
        }
    ?>
    <x-slot name="header">
        <x-nav-link>
            <a class="{{ activeMenu('/home') }}" href="{{ route('home') }}">Inicio</a>
        </x-nav-link>
        <x-nav-link>
            <a class="{{ activeMenu('/saludo/*') }}" href="{{ route('saludos', 'Emilio') }}">Saludo</a>
        </x-nav-link>
        <x-nav-link>
            <a class="{{ activeMenu('/contactos') }}" href="{{ route('contactos') }}">Contacto</a>
        </x-nav-link>
    </x-slot>

    @yield('content')
</x-app-layout>

@yield('footer') </body>
</html>
