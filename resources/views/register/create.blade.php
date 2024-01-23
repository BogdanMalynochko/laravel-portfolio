<x-layout>
    <div class="container">
        <h1 class="mb-10 center">Register!</h1>

        <form class="max-w-3xl mx-auto" action="/register" method="POST">
            @csrf

            <x-form.input name="name"/>
            <x-form.input name="email"/>
            <x-form.input type="password" name="password"/>

            <x-form.button>Register User</x-form.button>
        </form>
    </div>
</x-layout>