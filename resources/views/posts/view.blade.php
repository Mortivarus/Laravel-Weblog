<x-layout>
	<x-content>
		<h1>{{$post->title}}</h1>
		<div class="roundimg">
			<img src="/images/banner.jpg">
		</div>
			<p>
				{{$post->content}}
			</p>
		<strong>Category: {{$post->category->name}}</strong>
	
	
	@auth	
		<p>
			<div>
				<div class="button-left">
					<form method="get" action="/posts/{{ $post->id }}/edit">
						@csrf
						<input type="submit" value="Edit Post" class="button">
					</form>
				</div>
				<div>
					<form method="post" action="/posts/{{ $post->id }}">
						@csrf
						@method('DELETE')
						<input type="submit" value="Delete Post" class="button">
					</form>
				</div>
			</div>
		</p>
	@endauth

	<x-comment-create :post="$post"/>
		
		<div class="commentSection">
			<h3>Comments</h3>
		</div>
		
		@foreach ($post->comments as $comment)
			<x-comment-view :comment="$comment"/>
		@endforeach
	</x-content>

	<x-sidebar :posts="$posts"/>
</x-layout>