@extends('layouts.layout')

@section('content')
    @if (session('message')) 
    <div class="alert alert-success">
        {{ session('message')}}
    </div>
    @endif
    <table class="table table-dark table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>BRAND</th>
                <th>GRADAZIONE</th>
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
                    <a href="{{ route('beers.show',$beer->id) }}" class="btn btn-outline-light"> <i class="fas fa-info-circle"></i> </a>
                </td>
                <td>
                    <a href="{{ route('beers.edit',$beer->id) }}" class="btn btn-outline-light"> <i class="fas fa-edit"></i> </a>
                </td>
                <td>
                    <form action="{{ route('beers.destroy', $beer->id )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-light"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('beers.create')}}" class="btn btn-primary mb-5">CREA NUOVA BIRRA</a>
@endsection
    
