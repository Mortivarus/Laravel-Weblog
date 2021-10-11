@auth
    <br>
    <form method="POST"  action="/posts/{{ $post->id }}/comments">
    @csrf

        <x-form.field name="content" label="Write a comment" />
        <x-button>Submit Comment</x-button>
    
    </form>
@endauth