<x-layout>

    <div id="wrapper">
        <div id="page" class="container">
            <div class="form">
                <form method="post" action="{{route('premium.store')}}">
                    @csrf
                    
                    <x-form.checkbox name="premium" label="Toggle premium"/>
                    
    
                    <x-button>Submit</x-button>
                </form>
            </div>
        </div>
    </div>
    
    </x-layout>