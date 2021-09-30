@auth
    <br>
    <form method="POST"  action="/posts/{{ $post->id }}/comments">
    @csrf

        <x-form.input name="content" label="Write a comment" />
        <x-button>Submit Comment</x-button>
    
    </form>
@endauth