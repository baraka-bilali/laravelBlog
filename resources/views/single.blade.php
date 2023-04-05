@extends('layouts.app')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="container">
    <a href="{{ route('acceuil') }}">Retour</a>
        <h1>{{ $title }}</h1>

    </div>
@endsection
