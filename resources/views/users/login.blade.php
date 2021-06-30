@include('layouts/header')

<div id="wrapper">
	<div id="page" class="container">
		<div class="form">
            <form method="post" action="#">
                @csrf
            
                <label for="username">Username</label><br>
                <input 
                    type="text" 
                    id="username" 
                    name="username"
                    ><br>
            
                <label for="password">Password</label><br>
                <input 
                    type="text" 
                    id="password" 
                    name="password"
                    ><br>
            
                <input type="submit" value="Login">
            </form>
        </div>
	</div>
</div>

@include('layouts/footer')
