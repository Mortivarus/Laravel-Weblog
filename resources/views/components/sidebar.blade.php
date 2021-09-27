<div id="sidebar">

    {{-- <ul>
        @foreach ($categories as $category)
            <li>{{$category->name}}</li>
        @endforeach
    </ul> --}}

    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
        <div x-data="{ show:false }">
            <button @click="show = !show">Categories</button>
    
            <div x-show="show">
                @foreach ($categories as $category)
                    <a href="#" class="block">{{$category->name}}</a>
                @endforeach

            </div>
        </div>
    </div>

    <ul class="style1">
        @foreach ($posts as $post)
            <li class="first">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p>{{$post->excerpt}}</p><br>
                <p>
                    <strong>
                    Created {{$post->created_at->diffForHumans()}}, Category: {{$post->category->name}}
                    </strong>
                </p>
            </li>
        @endforeach
    </ul>
    {{-- <div id="stwo-col">
        <div class="sbox1">
            <h2>Etiam rhoncus</h2>
            <ul class="style2">
                <li><a href="#">Semper quis egetmi dolore</a></li>
                <li><a href="#">Quam turpis feugiat dolor</a></li>
                <li><a href="#">Amet ornare hendrerit lectus</a></li>
                <li><a href="#">Quam turpis feugiat dolor</a></li>
            </ul>
        </div>
        <div class="sbox2">
            <h2>Integer gravida</h2>
            <ul class="style2">
                <li><a href="#">Semper quis egetmi dolore</a></li>
                <li><a href="#">Quam turpis feugiat dolor</a></li>
                <li><a href="#">Consequat lorem phasellus</a></li>
                <li><a href="#">Amet turpis feugiat amet</a></li>
            </ul>
        </div>
    </div> --}}
</div>