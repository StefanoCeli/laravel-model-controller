@extends('layout.main')

@section('content')
    <main>

        <ul>
            @foreach ($movies as $movie )
                
            <div>
                <li><span>Titolo: </span>{{ $movie['title'] }}</li>
                <li><span>Titolo originale: </span>{{ $movie['original_title'] }}</li>
                <li><span>Nazionalità: </span>{{ $movie['nationality'] }}</li>
                <li><span>Data: </span>{{ $movie['date'] }}</li>
                <li><span>Voto: </span>{{ $movie['vote'] }}</li>
            </div>    

            @endforeach
        </ul>

    </main>
@endsection