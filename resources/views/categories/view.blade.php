<x-layout>
    <x-content>
        <span class="block font-bold text-xl text-black-700 py-2">All posts of category "{{$category->name}}"</span>
       @foreach ($category->posts->sortByDesc('created_at') as $post)
        <li class="first py-3">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <p class="block">{{$post->excerpt}}</p>
            <p class="block font-bold text-sm py-1">Created by {{$post->author->name}}, {{$post->created_at->diffForHumans()}}.</p>
        </li>
       @endforeach
        
    </x-content>
</x-layout>