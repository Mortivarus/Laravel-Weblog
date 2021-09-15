@auth
    <form method="POST"  action="/posts/{{ $post->id }}/comments">
    @csrf

    <label for="title">Write a Comment</label><br>
            <input 
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