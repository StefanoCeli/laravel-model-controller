@extends('layout.main')

@section('content')
    <main>

        <ul>
            @foreach ($movies as $movie )
                <li><strong>Titolo: </strong>{{ $movie['title'] }}</li>
                <li><strong>Titolo originale: </strong>{{ $movie['original_title'] }}</li>
                <li><strong>Nazionalità: </strong>{{ $movie['nationality'] }}</li>
                <li><strong>Data: </strong>{{ $movie['date'] }}</li>
                <li><strong>Voto: </strong>{{ $movie['vote'] }}</li>
                <br>
            @endforeach
        </ul>

    </main>
@endsection