@props(['post'])
<article class="w-full bg-white shadow-lg rounded-lg overflow-hidden mb-24">
    <img class="w-full h-96 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="" title="">
    <div class="py-8 px-6">
        <h2 class="font-bold text-xl text-gray-800 mb-4"><a href="{{route('posts.show', $post)}}">{{$post->name}}</h2>
        <p class="text-justify text-gray-500">{{$post->extract}}</p>
        <div class="mt-4 flex items-center justify-end">
            @foreach ($post->tags as $tag)
                <a href="{{route('posts.tag', $tag)}}" class="px-3 py-1 bg-{{$tag->color}}-500 rounded-full @if(!$loop->last) mr-4 @endif" href="">{{$tag->name}}</a>
            @endforeach
        </div>
    </div>
</article>