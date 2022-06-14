@extends('layouts.app')

@section('content')

<section class="movies container my-4">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center">

        @foreach ($movies as $movie)

        <div class="cols my_card text-center ">
            <h2>Titolo: {{ $movie->title }}</h2>
            <h5>Titolo originale: {{ $movie->original_title }}</h5>
            <p>Data: {{ $movie->date }}</p>
            <p>Nazionalità: {{ $movie->nationality }} <p>
            <p>Voto utenti: {{ $movie->vote }}</p>
        </div>

        @endforeach

    </div>

</section>

@endsection