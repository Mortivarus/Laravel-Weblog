<x-layout>

<div id="wrapper">
	<div id="page" class="container">
		<div class="form">
            <form method="post" action='/login'>
                @csrf
            
                <label for="username">Username</label><br>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    type="text" 
                    id="username" 
                    name="username"
                    ><br>

                @error('username')
                   {{$message}}
                @enderror
            
                <label for="password">Password</label><br>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    type="password" 
                    id="password" 
                    name="password"
                    >
                @error('password')
                    {{$message}}
                @enderror
                <br>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Sign In
                  </button>
            </form>
        </div>
	</div>
</div>

</x-layout>
