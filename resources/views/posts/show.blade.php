<x-app-layout>
    <div class="container py-8">
        <h1 class="font-bold text-4xl text-gray-600">{{$post->name}}</h1>
        <div class="my-4 text-gray-500 text-justify">
            <p>{{$post->extract}}</p>
        </div>
        <div class="grid gap-6 md:grid-cols-3 grid-cols-1">
            <div class="col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                </figure>
                <div class="mt-4 text-gray-600 text-justify">
                    <p>{{$post->body}}</p>
                </div>
            </div>
            <aside>
                <h2 class="text-2xl font-bold text-gray-600 mb-4">Más {{$post->category->name}}</h2>
                <ul>
                    @foreach ($related as $rel)
                        <li class="mb-4">
                            <a class="flex items-center" href="{{route('posts.show', $rel)}}">
                                <img src="{{Storage::url($rel->image->url)}}" class="w-36 object-cover object-center" alt="">
                                <span class="ml-1">{{$rel->name}}</span>
                            </a>
                        </li>    
                    @endforeach

                </ul>
            </aside>
        </div>
    </div>

</x-app-layout>