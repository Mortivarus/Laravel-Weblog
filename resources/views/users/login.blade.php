<x-layout>

<div id="wrapper">
	<div id="page" class="container">
		<div class="form">
            <form method="post" action='/login'>
                @csrf
                
                <x-form.input name="username" label="username" required/>
                <x-form.input name="password" label="password" type="password" autocomplete="new-password" required/>

                <x-button>Login</x-button>
            </form>
        </div>
	</div>
</div>

</x-layout>
