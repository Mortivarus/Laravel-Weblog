<x-layout>
    <h1>Edit Post</h1>
    <form method="post" action="/posts/{{ $post->id }}">
        @csrf
        @method('PATCH')

        <x-form.input name="title" label="title" :value="old('title', $post->title)" required/>
        <x-form.input name="excerpt" label="excerpt" :value="old('excerpt', $post->excerpt)" required/>
        <x-form.input name="content" label="content" :value="old('content', $post->content)" required/>
        <x-form.input name="category" label="category" :value="old('category', $post->category->name)" required/>

        <x-button>Submit</x-button>
    </form>
</x-layout>