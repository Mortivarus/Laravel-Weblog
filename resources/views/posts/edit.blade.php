<x-layout>
    <h1>Edit Post</h1>
    <form method="post" action="/posts/{{ $post->id }}" class="my-2" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div>
            <x-form.input name="title" label="title" :value="old('title', $post->title)" required/>
        </div>
        <div>
            <x-form.field name="excerpt" label="excerpt" :value="old('excerpt', $post->excerpt)" required/>
        </div>
        <div>
            <x-form.image name="image" label="image"/>
        </div>
        <div>
            <x-form.field name="content" label="content" :value="old('content', $post->content)" required/>
        </div>
        <div>
            <x-form.dropdown name="category_id" label="category" :collection="$categories"/>
        </div>

        <x-button>Submit</x-button>
    </form>
</x-layout>