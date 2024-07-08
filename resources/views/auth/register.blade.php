@extends('layouts.master')

@section('titulo', 'Crear link')

@section('content')
<div id="frm">
	<center>
    <form method="POST" class="formulario" action="{{ route('register') }}">
        @csrf
        <h1>Crear Cuenta</h1><br>

        <div>
            <label for="name"><h2>Nombre</h2></label><br>
            <input id="name" class="boton" type="text" name="name" required>
        </div><br><br>
        <div>
            <label for="email"><h2>Email</h2></label><br>
            <input id="email" class="boton" type="email" name="email" required>
        </div><br><br>
        <div>
            <label for="password"><h2>Contraseña</h2></label><br>
            <input id="password" class="boton" type="password" name="password" required>
        </div><br><br>
        <div>
            <label for="password-confirm"><h2>Confirme Contraseña</h2></label><br>
            <input id="password-confirm" class="boton" type="password" name="password_confirmation" required>
        </div><br><br>
        <button type="submit" class="boton">Crear Cuenta</button>
    </form>
    </center>
</div>
@stop
