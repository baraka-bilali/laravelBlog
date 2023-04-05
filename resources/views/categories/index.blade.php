    <x-app-layout>
        <x-slot name="title">Listes des catégories</x-slot>

        <div class="container">
            <h1>Liste des catégories ({{ $categories->total() }})</h1>
            <p class="text-end "><a href="{{ route('categories.create') }}" class="btn btn-primary">+Ajouter</a></p>
            @php
                $profession = "developpeur";
            @endphp
            <x-test :profession="$profession" :name="__('Jean')">
                <p>Test slot</p>
                <x-slot name="titre">Laravel</x-slot>
            </x-test>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th style="width: 250px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($categories as $item)
                    <tr>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                                </button>
                                <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="{{ route('categories.show', $item->id )}}" class="btn btn-success">Voir</a></li>
                                <li> <a class="dropdown-item" href="{{ route('categories.edit', $item->id )}}" class="btn btn-warning">Editer</a></li>
                                <li> <a onclick="supprimer(event)" class="dropdown-item" href="{{ route('categories.destroy', $item->id )}}" class="btn btn-danger" data-bs-target="#exampleModal" data-bs-toggle="modal">Supprimer</a></li>
                                </ul>
                            </div>




                        </td>


                    </tr>

                </tbody>

                @empty
                <tr>
                    <td colspan="4">
                        Aucun enregistrement trouvé
                    </td>

                </tr>

                @endforelse
            </table>


        </div>
        <div class="row d-flex justify-content-center">

            {{ $categories->links() }}


        </div>
        <!-- Button trigger modal -->



    <x-slot name="scripts">
        <script>
            function supprimer(event){
                var route = event.target.getAttribute('href')
                deleteForm.setAttribute('action',route)
                //alert(route)
            }

        </script>
    </x-slot>

    <

</x-app-layout>

