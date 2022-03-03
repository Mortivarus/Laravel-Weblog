<div class="flex flex-row ml-px absolute right-0 top-24 p-3 float-left gap-1 tracking-widest">
    <div class="block">
        <x-menu.item route="posts.index" name="Home"/>
    </div>
    <div class="block">
        <x-menu.item route="posts.search" name="Search"/>
    </div>

    @guest    
        <div class="block">
            <x-menu.item route="session.create" name="Login"/>
        </div>
        <div class="block">
            <x-menu.item route="user.create" name="Register"/>
        </div>
    @endguest

    @if (Gate::allows(env('ADMIN_USERNAME')))
        <div class="block">
            <x-menu.item route="posts.create" name="Write Post"/>
        </div>
    @endif
    @auth    
        <div class="block">
            <x-menu.button/>
        </div>
    @endauth
</div>