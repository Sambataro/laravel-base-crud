<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-crud-base</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
    </head>
    <body>
    <section class="container">
    <h1 class="mt-5">DB-BEERS</h1>
    <table class="table table-dark table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>BRAND</th>
                <th>GRADUAZIONE</th>
                <th>CREATO IL</th>
                <th>AGGIORNATO IL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beers as $beer)
            <tr>
                <td>{{ $beer->id }}</td>
                <td>{{ $beer->name }}</td>
                <td>{{ $beer->brand}}</td>
                <td>{{ $beer->graduation }}%</td>
                <td>{{ $beer->created_at }}</td>
                <td>{{ $beer->updated_at }}</td>
                <td>
                    <a href="{{ route('beers.show',[ 'beer' => $beer->id]) }}" class="btn btn-outline-light">SHOW</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </section>
    </body>
</html>
