@extends('layouts.nav-header')

@section('content')
    <h1>Contacto</h1>
    <h2>Escribeme!</h2>

    <form action="contactos" method="post">
        @csrf
        <label for="nombre">
            Nombre
            <input type="text" name="nombre">
        </label>
        <label for="email">
            Email
            <input type="email" name="email">
        </label>
        <label for="mensaje">
            Mensaje
            <textarea name="mensaje" cols="30" rows="10"></textarea>
        </label>
        <input type="submit" value="Enviar">
    </form>
@endsection
