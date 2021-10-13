<x-layout>
	<x-content>
		<div class="text-3xl">
			<h1>{{$post->title}}</h1>
		</div>
		<br>
		<div class="roundimg">
			<img src="/images/banner.jpg">
		</div>
		<br>
			<p>
				{{$post->content}}
			</p>
			<br>
		<strong>By {{$post->author->name}}, Category: {{$post->category->name}}</strong><br><br>
	
	
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

	<x-sidebar :posts="$posts" :categories="$categories"/>
</x-layout>