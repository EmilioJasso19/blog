<x-app-layout>
    <h1 class="text-3xl">Contacto</h1>
    <h2 class="text-xl">Escribeme!</h2>

    @if(session()->has('info'))
        <h3>{{ session('info') }}</h3>
    @endif
    <form action="contactos" method="post">
        @csrf
        <label for="nombre">
            Nombre
            <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Emilio Jasso">
        </label>
            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
        <label for="email">
            Email
            <input type="email" name="email" value="{{ old('email') }}" placeholder="email@example.com">
        </label>
            {!! $errors->first('email', '<span class="error">:message</span>') !!}
        <label for="mensaje">
            Mensaje
            <textarea name="mensaje" cols="30" rows="10" placeholder="Quiero colaborar contigo para...">{{ old('mensaje') }}</textarea>
        </label>
            {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
        <input
            class="bg-blue-500 hover:bg-blue-700 hover:cursor-pointer text-white font-bold py-2 px-4 rounded m-2"
            type="submit" value="Enviar">
    </form>
</x-app-layout>
