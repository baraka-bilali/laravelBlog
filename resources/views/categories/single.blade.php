<x-app-layout>
    <x-slot name="title">Description article</x-slot>
    <div class="container">
        <h1>La description </h1>

        @section('content')
            <h1>{{ $category->name }}</h1>
            <p><i>{{ $category->created_at }}</i></p>
            <p>{{ $category->description }}</p>
    </div>
       @endsection

</x-app-layout>
