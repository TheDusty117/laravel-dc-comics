@extends('layouts.app')



@section('content')

<section class="content-section">
    <div class="container">
        <h1>Nuovo fumetto</h1>
    </div>

    <div class="container">
        <form class="my-3" action="{{ route('comics.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>      {{-- old title recupera il valore inserito in precedenza --}}
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" >
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" cols="30" rows="10" >
                    {{ old('title') }}
                </textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data rilascio</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>

        </form>

        {{-- ELEMENTO CHE MOSTRA L'ERRORE DI COMPILAZIONE DEL FORM QUI SU --}}

        @if ($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

    </div>
</section>

@endsection



@section('content')
