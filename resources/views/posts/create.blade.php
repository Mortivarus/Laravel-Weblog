<x-layout>
    <x-content>
        <form method="post" action="/posts" class="">
            @csrf

            <div>
                <x-form.input name="title" label="title" required/>
            </div>
            <div>
                <x-form.field name="excerpt" label="excerpt" required/>
            </div>
            <div>
                <x-form.field name="content" label="content" required/>
            </div>
            <div>
                <x-form.input name="category" label="category" required/>
            </div>
            
            <x-button>Submit</x-button>

        </form>
    </x-content>
</x-layout>

