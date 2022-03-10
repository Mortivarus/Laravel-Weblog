<x-layout>
	<x-content>
		<div class="text-3xl">
			<h1>{{$post->title}}</h1>
		</div>
		
		@isset($post->image)
			<br>
			<div class="roundimg">
				<img src="{{asset($post->image)}}">
			</div>
		@endisset
			
			<br>
			<p>
				{{$post->content}}
			</p>
			<br>
		<strong>By {{$post->author->name}}, Category: {{$post->category->name}}, Premium: {{$post->premium? 'True': 'False'}}</strong><br><br>
		
	
	
	@auth
		<div class="flex flex-row gap-1">
			<div>
				<form method="get" action="/posts/{{ $post->id }}/edit">
					@csrf
					<x-button>Edit Post</x-button>
				</form>
			</div>
			<div>
				<form method="post" action="/posts/{{ $post->id }}">
					@csrf
					@method('DELETE')
					<x-button>Delete Post</x-button>
				</form>
			</div>
		</div>
	@endauth

	<x-comments.create :post="$post"/>
		
		<div class="commentSection">
			<h3>Comments</h3>
		</div>

		@foreach ($post->comments->sortByDesc('created_at') as $comment)
			<x-comments.view :comment="$comment"/>
		@endforeach
	</x-content>

	<x-sidebar-view/>
</x-layout>