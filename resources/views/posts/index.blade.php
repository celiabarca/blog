<x-app-layout>
    <div class="container py-8">
        <div class="grid lg:grid-cols-3 sm:grid-cols-2  grid-cols-1 gap-6">
            @foreach ($posts as $post)
                <article style="background-image: url('{{Storage::url($post->image->url)}}')" class="@if($loop->first) sm:col-span-2 @endif w-full h-80 bg-cover bg-center">
                    <div class="w-full h-full flex flex-col justify-center px-8">
                        <div class="mb-4">
                        
                            @foreach ($post->tags as $tag)
                                <a href="{{route('posts.tag', $tag)}}" class="px-3 py-1 bg-{{$tag->color}}-500 rounded-full" href="">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <h1 class="text-white leading-8 font-bold text-4xl">
                            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-5">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>