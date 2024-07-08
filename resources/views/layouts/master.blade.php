<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App-ToDo - @yield('titulo')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @section('header')
        @include('includes.header')
    @show

    @yield('content')

    {{-- @section('footer')
        @include('includes.footer')
    @show --}}
</body>
</html>
