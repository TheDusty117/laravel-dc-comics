@extends('layouts.app')



@section('content')

<section class="content-section">
    <div class="container">
        <h2>SONO SU SHOW</h2>
        <div class="row">

            <div class="text-center">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
                <img src="{{ $comic->thumb }}" alt="">
                <h3>$ {{ $comic->price }}</h3>
                <h4>Series: {{ $comic->series }} </h4>
                <h5>Release date: {{ $comic->sale_date }}</h5>
                <h5>Type: {{ $comic->type }}</h5>
            </div>

        </div>



    </div>
</section>

@endsection



@section('content')
