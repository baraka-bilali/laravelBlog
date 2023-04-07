<x-app-layout>
    <x-slot name="title">Editer un Article</x-slot>
 
    <h1>Editer Article</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article->id) }}" method="post">
        @csrf
        @method('PUT')
        <p>
            Catégorie : 
            <select name="categorie" id="">
                <option value=""></option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}" @if ($item->id == $article->categorie->id)
                        selected
                    @endif>{{ $item->name }}</option>
                @endforeach
            </select>
        </p>
        <p>
            Titre : 
            <input type="text" value="{{ $article->title }}" name="title">
        </p>
        <p>Slug :
            <textarea name="slug" id="" cols="30" rows="2">{{ $article->slug }}</textarea>
        </p>
        <p>Description :
            <textarea name="content" id="" cols="30" rows="10">{{ $article->content }}</textarea>
        </p>
        <p><button class="btn btn-primary" type="submit">Modifier</button></p>
    </form>
    
</x-app-layout>
    
