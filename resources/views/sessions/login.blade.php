<x-layout>
    <div class="container">
        <h1 class="mb-10 center">Log in!</h1>

        <form class="max-w-3xl mx-auto" action="/login" method="POST">
            @csrf

            <x-form.input name="email"/>
            <x-form.input type="password" name="password"/>

            <x-form.button>Log In</x-form.button>
        </form>
    </div>
</x-layout>