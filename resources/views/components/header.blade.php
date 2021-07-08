<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charlie's Weblog</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
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
                    @guest 
                        <li class="{{ Request::url() === route('session.create') ? 'current_page_item' : '' }}"><a href="{{route('session.create')}}" accesskey="2" title="">Login</a></li>
                        <li class="{{ Request::url() === route('user.create') ? 'current_page_item' : '' }}"><a href="{{route('user.create')}}" accesskey="3" title="">Register</a></li>
                    @endguest
                
                    @auth
                        <li class="{{ Request::url() === route('posts.create') ? 'current_page_item' : '' }}"><a href="{{route('posts.create')}}" accesskey="4" title="">Write Post</a></li>
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
        <div id="banner-wrapper">
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
