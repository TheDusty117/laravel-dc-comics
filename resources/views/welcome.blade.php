<!-- estende il pezzo "layouts/app" ovvero la nostra maschera di layout, e ne estende l'interno con un content qui sotto -->
@extends('layouts.app')



@section('content')

<section class="content-section">
    <div class="container">
        <h3>Clicca qui sotto per vedere i Comics!</h3>
        <div class="row">

            <ul>
                <li>
                    <a href="{{ route('comics.index') }}">
                        <h1>Vai ai Comics</h1>
                    </a>
                </li>
            </ul>

        </div>

    </div>
</section>

@endsection



@section('content')
