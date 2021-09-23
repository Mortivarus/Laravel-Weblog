@auth
    <form method="POST"  action="/posts/{{ $post->id }}/comments">
    @csrf

        <x-form.input name="content" label="Write a comment" />
    
    
    <input type="submit" value="Submit Comment" class="button">
    
    </form>
@endauth