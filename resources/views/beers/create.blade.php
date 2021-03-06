@extends('layouts.layout')

@section('content')
    <h4>CREA NUOVA BIRRA</h4>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif  
    <form class="col-6 p-0"  action="{{ route('beers.store') }}" method="POST">
        @csrf
        @method('POST')

            <label for="name">Nome</label>
            <input class="form-control mt-1" type="text" name="name" id="name" placeholder="Nome" value="{{ old('name')}}">
            <label class="mt-2" for="brand">Brand</label>
            <input class="form-control mt-1" type="text" name="brand" id="brand" placeholder="Brand" value="{{ old('brand')}}">    
            <label class="mt-2" for="graduation">Gradazione</label>
            <input class="form-control mt-1" type="text" name="graduation" id="graduation" placeholder="Gradazione alcolica" value="{{ old('name')}}">
            <button type="submit" class="btn btn-primary mt-3">SALVA</button>
            <a href="{{ route('beers.index') }}" class="btn btn-outline-dark mt-3">BACK TO BEERS</a>
    </form>
 
@endsection
    


