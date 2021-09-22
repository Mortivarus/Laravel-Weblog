@auth
    <form method="POST"  action="/posts/{{ $post->id }}/comments">
    @csrf

    <label for="title">Write a Comment</label><br>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                type="text" 
                id="content" 
                name="content"
                value="{{ old('content') }}"><br>

            @if($errors->has('content'))
                <p class="help is-danger">{{ $errors->first('content') }}</p>
            @endif
    
    
    <input type="submit" value="Submit Comment" class="button">
    
    </form>
@endauth