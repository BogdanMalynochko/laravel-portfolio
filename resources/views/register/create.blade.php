<x-layout>
    <div class="container">
        <x-heading class="center">Register</x-heading>
        <form class="max-w-3xl mx-auto" action="/register" method="POST">
            @csrf

            <x-form.input name="name"/>
            <x-form.input name="email"/>
            <x-form.input type="password" name="password"/>

            <x-form.button>Register User</x-form.button>
        </form>
    </div>
</x-layout>