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
            <li class="current_page_item" accesskey="6" title="">
                <form action="/logout" method="post">
                    @csrf

                    <button type="submit">Log Out</button>
                </form>
            </li>
        @endauth
    </ul>
</div>



{{-- <div id="menu" class="flex flex-row gap-1 text-white">
    <div>
        <x-menu-item route="posts.index" name="Home"/>
    </div>
    <div>
        <x-menu-item route="posts.search" name="Search"/>
    </div>
    <div>
        <x-menu-item route="session.create" name="Login"/>
    </div>
    <div>
        <x-menu-item route="user.create" name="Register"/>
    </div>
    <div>
        <x-menu-item route="posts.create" name="Write Post"/>
    </div>

    <form action="/logout" method="post">
        @csrf

        <button type="submit" class="current_page_item">Log Out</button>
    </form>
</div> --}}