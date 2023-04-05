<x-app-layout>
    <x-slot name="title">
       Créer une catégorie
    </x-slot>
    <div class="container">
        <h1>Créer Une Catégorie</h1>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="">
                <label for="" class="">Nom</label>
                <div class="col-sm-10">
                  <input type="" class="form-control" id="" name="name" >
                </div>
            </div>
            <br>
            <div class="">
                <label for="" class="">Description</label>
                <div class="col-sm-10">
                  <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <br>
            <button class="btn btn-primary">Créer</button>
        </form>

    </div>

</x-app-layout>
