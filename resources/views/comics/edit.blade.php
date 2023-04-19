@extends('layouts.app')



@section('content')

{{-- @dump($comic) --}}

<section class="content-section">
    <div class="container">
        <h1>Modifica: {{ $comic->title }}</h1>
    </div>

    <div class="container">
        {{-- in action si aggiunge la rotta parametrica --}}
        <form class="my-3" action="{{ route('comics.update',$comic) }}" method="POST">

            @csrf
            {{-- aggiungo direttiva put per specificare il metodo con rotta--}}
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$comic->title) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" cols="30" rows="10">
                    {{ old('description',$comic->description) }}
                </textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb',$comic->thumb) }}" >
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price',$comic->price) }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series',$comic->series) }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data rilascio</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date',$comic->sale_date) }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type',$comic->type) }}">
            </div>

            <button type="submit" class="btn btn-secondary">Modifica</button>

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
