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
        <script src="//unpkg.com/alpinejs" defer></script>

    </head>
    <body>
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="https://script.nl/"> &lt;Script&gt; Industries</a></h1>
            </div>
            <x-menu.header/>
        </div>

        <div id="header-featured">
            <div id="banner" class="container">
                <h2>Charlie's Blog</h2>
                <p>This is a simple blog written by a simple-minded person. Have a nice day :)</p>
            </div>
        </div>

        <x-success-flash/>
        <x-error-flash name="email"/>

        <div id="wrapper">
            <div id="page" class="container">
                    {{$slot}}
            </div>
        </div>

        <div id="copyright" class="container">
            <div class="flex justify-center items-center">
                <div class="mx-4">
                    <form  method="post" action="/newsletter">
                        @csrf
                            <div class="basis-4">
                                <x-form.newsletter name="email" label="Subscribe to our newsletter!"/>
                            </div>
                    </form>
                </div>
                <div>
                    <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by TEMPLATED.</p>
                </div>
            </div>
        </div>
    </body>
</html>