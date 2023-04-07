<x-app-layout>
    <x-slot name="title">{{ $article->title }}</x-slot>
 
    <h1>{{ $article->title }}</h1>
    <p class="text-end"><i>{{ $article->created_at }}</i></p>
    <p>{!! $article->content !!}</p>
    
</x-app-layout>
    
