<x-layout>
    <form method="post" action="/posts" class="" enctype="multipart/form-data">
        @csrf

        <div>
            <x-form.input name="title" label="title" required/>
        </div>
        <div>
            <x-form.field name="excerpt" label="excerpt" required/>
        </div>
        <div>
            <x-form.image name="image" label="image"/>
        </div>
        <div>
            <x-form.field name="content" label="content" required/>
        </div>

        <div>
            <x-form.dropdown name="category_id" label="category" :collection="$categories"/>
        </div>
        
        <x-button>Submit</x-button>

    </form>

    <form method="post" action="/category" class="pt-4">
    @csrf
        <div>
            <x-form.input name="addcategory" label="add a category"   />
        </div>

    </form>
</x-layout>

