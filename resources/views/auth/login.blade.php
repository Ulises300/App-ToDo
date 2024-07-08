@extends('layouts.master')

@section('titulo', 'Login')

@section('content')
<center>
<div id="frm">
    <form method="POST" class="formulario" action="{{ route('login') }}">
        @csrf
        <h1>Iniciar Sesión</h1>

        <div>
            <label for="email"><h2>Email</h2></label><br>
            <input id="email" class="boton" type="email" name="email" value="{{old('email')}}" required>
        </div><br>
        <div>
            <label for="password"><h2>Password</h2></label><br>
            <input id="password" class="boton" type="password" name="password" value="{{old('password')}}" required>
        </div><br><br>
        <button type="submit" class="boton">Login</button>
    </form>
</div>
</center>
</body>
</html>
@stop
