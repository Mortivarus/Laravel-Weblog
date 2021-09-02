<x-layout>
    <form method="post" action="{{route('user.store')}}">
        @csrf

        <label for="name">Name</label><br>
        <input 
            type="text" 
            id="name" 
            name="name"
            value="{{ old('name') }}"><br>

        @if($errors->has('name'))
            <p class="help is-danger">{{ $errors->first('name') }}</p>
        @endif

        <label for="username">Username</label><br>
        <input 
            type="text" 
            id="username" 
            name="username"
            value="{{ old('username') }}"><br>

        @if($errors->has('username'))
            <p class="help is-danger">{{ $errors->first('username') }}</p>
        @endif

        <label for="password">Password</label><br>
        <input 
            type="password" 
            id="password" 
            name="password"
            required><br>

        @if($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif

        <label for="email">E-mail</label><br>
        <input 
            type="email" 
            id="email" 
            name="email"
            value="{{ old('email') }}"><br>

        @if($errors->has('email'))
            <p class="help is-danger">{{ $errors->first('email') }}</p>
        @endif    

        <input type="submit">
    </form>
</x-layout>