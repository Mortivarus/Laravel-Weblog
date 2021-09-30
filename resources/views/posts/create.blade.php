<x-layout>
    <x-content>
        <form method="post" action="/posts">
            @csrf

            <x-form.input name="title" label="title" required/>
            <x-form.input name="excerpt" label="excerpt" required/>
            <x-form.input name="content" label="content" required/>
            <x-form.input name="category" label="category" required/>

            <x-button>Submit</x-button>

        </form>
    </x-content>
</x-layout>

