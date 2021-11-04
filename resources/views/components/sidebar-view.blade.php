<div id="sidebar">
    
    <x-category-dropdown/>

    <ul class="style1">
        @foreach ($posts as $post)
            <li class="first">
                <span class="block font-bold text-xl text-black-700 py-2"><a href="/posts/{{$post->id}}">{{$post->title}}</a></span>
                <p>{{$post->excerpt}}</p>
                <p class="block font-bold text-sm py-2">Created by {{$post->author->name}}, {{$post->created_at->diffForHumans()}}. Category: {{$post->category->name}}</p>
            </li>
        @endforeach
    </ul>
</div>