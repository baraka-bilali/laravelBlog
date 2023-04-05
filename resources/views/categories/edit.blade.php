<x-app-layout>
 <x-slot name="title">
    Editer
 </x-slot>

    <div class="container">
        <h1>Editer Une Catégorie</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="">
                <label for="" class="">Nom</label>
                <div class="col-sm-10">
                  <input type="" class="form-control" id="" name="name" value="{{ $category->name }}">
                </div>
            </div>
            <br>
            <div class="">
                <label for="" class="">Description</label>
                <div class="col-sm-10">
                  <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $category->description }}</textarea>
                </div>
            </div>
            <br>
            <button class="btn btn-primary">Modifier</button>
        </form>

    </div>

</x-app-layout>
