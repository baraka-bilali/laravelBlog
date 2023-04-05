@extends('layouts.app')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="container">
        <h1>Liste des pays </h1>
        @foreach ($array as $key => $pays)
        <p> <a href="{{ route("single", ['id'=>($key+1)]) }}"> Voici le pays {{ $pays }}</a></p>
        @endforeach
    </div>
@endsection

