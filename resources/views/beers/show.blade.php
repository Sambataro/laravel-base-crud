@extends('layouts.layout')

@section('content')
        <small>BEER DETAILS</small>
        <table class="table table-dark table-hover table-striped">
            @foreach ($beer->getAttributes() as $key => $value )
            <tr>
                <td>{{ $key}}</td>
                <td>{{ $value }}</td>
            </tr>
            @endforeach
        </table>
        <a href="{{ route('beers.index') }}" class="btn btn-outline-dark">BACK TO BEERS</a>
 
@endsection
    




        