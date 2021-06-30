@include('../layouts/header')

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
		</div>	
		
		@include('../comments/view')
	</div>

</div>


@include('../layouts/footer')
