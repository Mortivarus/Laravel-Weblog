@include('../components/header')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<h1>{{$post->title}}</h1>
			<div class="roundimg">
				<img src="/images/banner.jpg">
			</div>
				<p>
					{{$post->body}}
				</p>
			<strong>Category: {{$post->category}}</strong>

		<p>
			<form method="get" action="/posts/{{ $post->id }}/edit">
				@csrf
				<input type="submit" value="Edit Post" class="button">
			</form>
			<form method="post" action="/posts/{{ $post->id }}">
				@csrf
				@method('DELETE')
				<input type="submit" value="Delete Post" class="button">
			</form>
		</p>

		</div>	

		
		@include('../comments/view')
	</div>

</div>


@include('../components/footer')
