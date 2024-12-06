@extends('layouts.app')

@section('content')
    <h1>Liste des Héros</h1>
    <ul>
        @foreach($heros as $hero)
            <li>
                <strong>{{ $hero->name }}</strong> ({{ $hero->gender }}, {{ $hero->race }})<br>
                <strong>Compétence : {{ $hero->skill->name }}</strong>
                <p>{{ $hero->description }}</p>
            </li>
        @endforeach
    </ul>
@endsection
