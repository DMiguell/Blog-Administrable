<x-app-layout>
    <div class="container py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoria: {{$category->name}}</h1>
        @foreach ($posts as $post)
            <x-card-post :post="$post">

            </x-card-post>
        @endforeach
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>