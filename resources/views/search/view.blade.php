<x-layout>
    @foreach ($posts as $post)
        <li class="first">
            <h3>{{$post->title}}</h3>
            <p><a href="posts/{{$post->id}}">{{$post->excerpt}}</a></p>
        </li>
    @endforeach
</x-layout>
