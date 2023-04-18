@extends('layouts.app')



@section('content')

<section class="content-section">
    <div class="container">

        <div class="row">
            {{--
            <ul>
                <li>
                    <a href="">VAI AI COMICS</a>
                </li>
            </ul> --}}

            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        {{-- BOTTONE ROTTA ALLA CREAZIONE DEL NUOVO COMIC --}}
                        <a class="btn btn-primary" href="{{ route('comics.create') }}">
                            Nuovo comic
                        </a>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">

                    @foreach ($comics as $comic)
                    <div class="col-4 colonna p-4">
                        <a href="{{ route('comics.show',$comic->id) }}">
                            <h2>{{ $comic->title }}</h2>
                        </a>
                        {{-- <p>{{ $comic->description }}</p> --}}
                        <img src="{{ $comic->thumb }}" alt="">
                        <h3>$ {{ $comic->price }}</h3>
                        <h4>Series: {{ $comic->series }} </h4>
                        <h5>Release date: {{ $comic->sale_date }}</h5>
                        <h5>Type: {{ $comic->type }}</h5>
                        <a class="btn btn-secondary" href="{{ route('comics.edit',$comic) }}">Modifica</a>
                        {{-- bisogna creare un form per far si che si elimini con un button
                            esattamente come il form creato per EDIT --}}
                        <form action="{{ route('comics.destroy',$comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Elimina">
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>

@endsection



@section('content')
