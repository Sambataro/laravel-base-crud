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

     
            <input class="form-control mt-3" type="text" name="name" placeholder="Nome">
            <input class="form-control mt-3" type="text" name="brand" placeholder="Brand">    
            <input class="form-control mt-3" type="text" name="graduation" placeholder="Graduazione alcolica">
            <button type="submit" class="btn btn-outline-dark mt-3">SALVA</button>
            <a href="{{ route('beers.index') }}" class="btn btn-outline-dark mt-3">BACK TO BEERS</a>
    </form>
 
@endsection
    


