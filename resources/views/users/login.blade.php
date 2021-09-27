<x-layout>

<div id="wrapper">
	<div id="page" class="container">
		<div class="form">
            <form method="post" action='/login'>
                @csrf
                
                <x-form.input name="username" label="username" required/>
                <x-form.input name="password" label="password" type="password" autocomplete="new-password" required/>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Sign In
                  </button>
            </form>
        </div>
	</div>
</div>

</x-layout>
