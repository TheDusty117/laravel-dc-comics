@extends('layouts.app')



@section('content')

<section class="content-section">
    <div class="container">
        <h3>CICLO LE INFO BASE DEL COMIC</h3>
        <div class="row">

            <ul>
                <li>
                    <a href="">one</a>
                </li>
                <li>
                    <a href="">two</a>
                </li>
                <li>
                    <a href="">three</a>
                </li>
            </ul>

            <div class="container">
                @foreach ($comics as $comic)
                <div class="p-4">
                    <a href="{{ route('comics.show',$comic->id) }}">link al fumetto</a>
                    <h2>{{ $comic->title }}</h2>
                    <p>{{ $comic->description }}</p>
                    <img src="{{ $comic->thumb }}" alt="">
                    <h3>$ {{ $comic->price }}</h3>
                    <h4>Series: {{ $comic->series }} </h4>
                    <h5>Release date: {{ $comic->sale_date }}</h5>
                    <h5>Type: {{ $comic->type }}</h5>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</section>

@endsection



@section('content')
