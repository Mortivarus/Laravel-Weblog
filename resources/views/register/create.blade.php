<x-layout>
    <form method="post" action="{{route('user.store')}}">
        @csrf


        <x-form.input name="name" required/>
        <x-form.input name="username" required/>
        <x-form.input name="email" type="email" required/>
        <x-form.input name="password" type="password" autocomplete="new-password" required/>

        <input type="submit">
    </form>
</x-layout>