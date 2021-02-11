@extends('layouts.layout')

@section('content')
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
                    <a href="{{ route('beers.show',[ 'beer' => $beer->id]) }}" class="btn btn-outline-light">DETAILS</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('beers.create')}}" class="btn btn-outline-dark">CREA NUOVA BIRRA</a>
@endsection
    
