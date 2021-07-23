<x-app-layout>
    <div class="max-w-5xl mx-auto px-2  my-10">
        <h1 class="uppercase mb-10 text-gray-800 text-4xl font-bold">Tag {{$tag->name}}</h1>
        
        @foreach ($posts as $post)
            <x-card :post=$post/>
        @endforeach
        <div class="mt-5">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>