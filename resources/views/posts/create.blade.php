<x-layout>
    <x-content>
        <form method="post" action="/posts">
            @csrf
                
            <h2>
                <label for="title">Title</label>
            </h2>

            <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                type="text" 
                id="title" 
                name="title"
                value="{{ old('title') }}"><br>

            @if($errors->has('title'))
                <p class="text-red-500 text-sm mt-2">{{ $errors->first('title') }}</p>
            @endif
            <br>

            <h2>
                <label for="excerpt">Excerpt</label>
            </h2>

            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                type="text" 
                id="excerpt" 
                name="excerpt"
                value="{{ old('excerpt') }}"><br>

            @if($errors->has('excerpt'))
                <p class="text-red-500 text-sm mt-2">{{ $errors->first('excerpt') }}</p>
            @endif
            <br>

            <h2>
                <label for="content">Content</label>
            </h2>
            
            <input 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" 
                id="content" 
                name="content"
                value="{{ old('content') }}"><br>

            @if($errors->has('content'))
                <p class="text-red-500 text-sm mt-2">{{ $errors->first('content') }}</p>
            @endif
            <br>

            {{-- <label for="category">Category</label><br>
            <input 
                type="text" 
                id="category" 
                name="category"
                value="{{ old('category') }}"><br>

            @if($errors->has('category'))
                <p class="help is-danger">{{ $errors->first('category') }}</p>
            @endif --}}

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Submit
            </button>
            
        </form>
    </x-content>
</x-layout>

