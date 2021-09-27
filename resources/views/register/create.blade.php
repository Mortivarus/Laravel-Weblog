<x-layout>
    <form method="post" action="{{route('user.store')}}">
        @csrf


        <x-form.input name="name" label="name" required/>
        <x-form.input name="username" label="username" required/>
        <x-form.input name="email" label="e-mail" type="email" required/>
        <x-form.input name="password" label="password" type="password" autocomplete="new-password" required/>

        <input type="submit">
    </form>
</x-layout>