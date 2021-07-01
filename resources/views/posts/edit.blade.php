@include('layouts/header')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
            
            <h1>Edit Post</h1>
            <form method="post" action="/posts/{{$post->id}}">
                @csrf
                @method('PATCH')
            
                <label for="title">Title</label><br>
                <input 
                    type="text" 
                    id="title" 
                    name="title"
                    value="{{ $post->title }}"><br>
            
                @if($errors->has('title'))
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                @endif

                <label for="excerpt">Excerpt</label><br>
                <input 
                    type="text" 
                    id="excerpt" 
                    name="excerpt"
                    value="{{ $post->excerpt }}"><br>
            
                @if($errors->has('excerpt'))
                    <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                @endif

                <label for="excerpt">Body</label><br>
                <input 
                    type="text" 
                    id="body" 
                    name="body"
                    value="{{ $post->body }}"><br>
            
                @if($errors->has('body'))
                    <p class="help is-danger">{{ $errors->first('body') }}</p>
                @endif

                <label for="excerpt">Category</label><br>
                <input 
                    type="text" 
                    id="category" 
                    name="category"
                    value="{{ $post->category }}"><br>
            
                @if($errors->has('category'))
                    <p class="help is-danger">{{ $errors->first('category') }}</p>
                @endif

                <input type="submit">
            </form>
		</div>	
	</div>

</div>

@include('layouts/footer')