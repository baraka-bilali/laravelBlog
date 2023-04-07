<x-app-layout>
    <x-slot name="title">Créer un article</x-slot>

    <h1>Créer un article</h1>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <p>
            Catégorie : 
            <select name="categorie" id="">
                <option value=""></option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </p>
        <p>
            Titre : 
            <input type="text" name="title">
        </p>
        <p>Slug :
            <textarea name="slug" id="" cols="30" rows="2"></textarea>
        </p>
        <p>Description :
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </p>
        <p><button class="btn btn-primary" type="submit">Créer</button></p>
    </form>
    
</x-app-layout>
    
