<x-layout>
    <h1>Edit Post</h1>
    <form method="post" action="/posts/{{ $post->id }}" class="my-2">
        @csrf
        @method('PATCH')

        <div>
            <x-form.input name="title" label="title" :value="old('title', $post->title)" required/>
        </div>
        <div>
            <x-form.field name="excerpt" label="excerpt" :value="old('excerpt', $post->excerpt)" required/>
        </div>
        <div>
            <x-form.field name="content" label="content" :value="old('content', $post->content)" required/>
        </div>
        <div>
            <x-form.input name="category" label="category" :value="old('category', $post->category->name)" required/>
        </div>

        <x-button>Submit</x-button>
    </form>
</x-layout>