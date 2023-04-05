@props(['name', 'profession'])

<h1 class="text-danger">Je suis {{ $name }} et je suis un {{ $profession }}</h1>

{{ $slot }}

<h2><i>{{ $titre }}</i></h2>
