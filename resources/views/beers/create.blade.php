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
    <form  action="{{ route('beers.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group d-flex inline-flex">
            <label for="name">Nome</label>
            <input class="ml-5" type="text" name="name" placeholder="Nome">
        </div>

        <div class="form-group d-flex inline-flex">
            <label for="brand">Brand</label>
            <input class="ml-5" type="text" name="brand" placeholder="Brand">    
        </div>

        <div class="form-group d-flex inline-flex">
            <label for="graduation">Gradi</label>
            <input class="ml-5" type="text" name="graduation" placeholder="Graduazione alcolica">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-dark">SALVA</button>
            <a href="{{ route('beers.index') }}" class="btn btn-outline-dark">BACK TO BEERS</a>
        </div>
    </form>
 
@endsection
    


