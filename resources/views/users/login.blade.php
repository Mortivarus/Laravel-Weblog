@include('../components/header')

<div id="wrapper">
	<div id="page" class="container">
		<div class="form">
            <form method="post" action='/login'>
                @csrf
            
                <label for="username">Username</label><br>
                <input 
                    type="text" 
                    id="username" 
                    name="username"
                    ><br>

                @error('username')
                   {{$message}}
                @enderror
            
                <label for="password">Password</label><br>
                <input 
                    type="password" 
                    id="password" 
                    name="password"
                    ><br>
                @error('password')
                    {{$message}}
                @enderror
                
            
                <input type="submit" value="Login">
            </form>
        </div>
	</div>
</div>

@include('../components/footer')
