<x-layout>
    <x-content>
        <form method="post" action="/posts">
            @csrf
                    
            <label for="title">Title</label><br>
            <input 
                type="text" 
                id="title" 
                name="title"
                value="{{ old('title') }}"><br>

            @if($errors->has('title'))
                <p class="help is-danger">{{ $errors->first('title') }}</p>
            @endif

            <label for="excerpt">Excerpt</label><br>
            <input 
                type="text" 
                id="excerpt" 
                name="excerpt"
                value="{{ old('excerpt') }}"><br>

            @if($errors->has('excerpt'))
                <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
            @endif

            <label for="content">Content</label><br>
            <input 
                type="text" 
                id="content" 
                name="content"
                value="{{ old('content') }}"><br>

            @if($errors->has('content'))
                <p class="help is-danger">{{ $errors->first('content') }}</p>
            @endif

            {{-- <label for="category">Category</label><br>
            <input 
                type="text" 
                id="category" 
                name="category"
                value="{{ old('category') }}"><br>

            @if($errors->has('category'))
                <p class="help is-danger">{{ $errors->first('category') }}</p>
            @endif --}}

            <input type="submit">
        </form>
    </x-content>
</x-layout>

