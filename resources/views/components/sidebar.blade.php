<div id="sidebar">
    
    <x-dropdown :items="$categories" label="Categories"/>

    <x-dropdown :items="$posts" label="Authors"/>



@foreach ($posts as $post)

    {{$post->author->name}}
    
@endforeach

    <ul class="style1">
        @foreach ($posts as $post)
            <li class="first">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p>{{$post->excerpt}}</p><br>
                <p>
                    <strong>
                    Created by {{$post->author->name}}, {{$post->created_at->diffForHumans()}}. Category: {{$post->category->name}}
                    </strong>
                </p>
            </li>
        @endforeach
    </ul>
</div>