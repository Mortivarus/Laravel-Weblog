<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Charlie's Weblog</title>
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link href="/css/templated/default.css" rel="stylesheet"/>
        <link href="/css/templated/fonts.css" rel="stylesheet"/>

    </head>
    <body>
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="https://script.nl/"> &lt;Script&gt; Industries</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{ Request::url() === route('posts.index') ? 'current_page_item' : '' }}"><a href="{{route('posts.index')}}" accesskey="1" title="">Home</a></li>
                    <li class="{{ Request::url() === route('posts.search') ? 'current_page_item' : '' }}"><a href="{{route('posts.search')}}" accesskey="2" title="">Search</a></li>
                    @guest 
                        <li class="{{ Request::url() === route('session.create') ? 'current_page_item' : '' }}"><a href="{{route('session.create')}}" accesskey="3" title="">Login</a></li>
                        <li class="{{ Request::url() === route('user.create') ? 'current_page_item' : '' }}"><a href="{{route('user.create')}}" accesskey="4" title="">Register</a></li>
                    @endguest
                    
                    @auth
                        <li class="{{ Request::url() === route('posts.create') ? 'current_page_item' : '' }}"><a href="{{route('posts.create')}}" accesskey="5" title="">Write Post</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf

                                <button type="submit" class="button">Log Out</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>

        <div id="header-featured">
            <div id="banner" class="container">
                <h2>Charlie's Blog</h2>
                <p>This is a simple blog written by a simple-minded person. Have a nice day :)</p>
            </div>
        </div>

        @if(session()->has('success'))
            <div id="wrapper">
                <div id="page" class="container">
                    <div id="content">
                        <p>{{ session()->get('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div id="wrapper">
            <div id="page" class="container">
                    {{$slot}}
            </div>
        </div>

        <div id="copyright" class="container">
            <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by TEMPLATED.</p>
        </div>
    </body>
</html>