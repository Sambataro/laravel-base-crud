<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-crud-base</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
    </head>
    <body>
        <div class="container">
        @include('partials.header')
        @yield('content')
        </div>
    </body>
</html>
