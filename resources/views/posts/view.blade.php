<x-layout>
	<x-content>
		<h1>{{$post->title}}</h1>
		<div class="roundimg">
			<img src="/images/banner.jpg">
		</div>
			<p>
				{{$post->content}}
			</p>
		<strong>Category: {{$post->category}}</strong>

		<p>
			<form method="get" action="/posts/{{ $post->slug }}/edit">
				@csrf
				<input type="submit" value="Edit Post" class="button">
			</form>
			<form method="post" action="/posts/{{ $post->slug }}">
				@csrf
				@method('DELETE')
				<input type="submit" value="Delete Post" class="button">
			</form>
		</p>
	</x-content>
	<x-sidebar :posts="$posts"/>
</x-layout>