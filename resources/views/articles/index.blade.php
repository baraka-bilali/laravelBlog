<x-app-layout>
    <x-slot name="title">Listes des articles</x-slot>
    <h1>Liste des articles ({{ $articles->total() }})</h1>
    
    <p class="text-end"><a href="{{ route('articles.create') }}" class="btn btn-primary">+Ajouter</a></p>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Titre</th>
                <th>Slug</th>
                <th>Catégorie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($articles as $item)
            <tr>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('DD/MM/Y h:mm a') }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->categorie->name }}</td>
                
                <td>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('articles.show', $item->id)}}">Voir</a></li>
                          <li><a class="dropdown-item" href="{{ route('articles.edit', $item->id)}}">Editer</a></li>
                          <li><a class="dropdown-item" onclick="supprimer(event)" href="{{ route('articles.destroy', $item->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</a></li>
                        </ul>
                      </div>
                    
                </td>
            </tr>
            @empty
              <tr>
                <td colspan="4">
                    Aucun enregistrement
                </td>
              </tr>  
            @endforelse
            
        </tbody>
    </table>

    {{ $articles->links() }}
 
  <!-- Modal -->
  <x-suppr :title="__('Article')" />
 
</x-app-layout>
    
