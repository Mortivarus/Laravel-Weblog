@include('../layouts/header')


<div id="header" class="container">
	<div id="logo">
		<h1><a href="https://script.nl/"> &lt;Script&gt; Industries</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="/" accesskey="1" title="">Home</a></li>
			<li class="current_page_item"><a href="#" accesskey="2" title="">Login</a></li>
			<li><a href="#" accesskey="3" title="">Write Post</a></li>
		</ul>
	</div>
</div>
<div id="header-featured">
	<div id="banner-wrapper">
		<div id="banner" class="container">
			<h2>Charlie's Blog</h2>
	</div>
</div>
<div id="wrapper">
	<div id="page" class="container">
		
        <h1>{{$post->title}}</h1>

        {{$post->body}}
        <br> <br>
        <strong>Category: {{$post->category}}</strong>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by TEMPLATED.</p>
</div>


@include('../layouts/footer')
