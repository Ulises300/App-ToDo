@extends('layouts.master')

@section('titulo', 'Crear link')

@section('content')
    <h1>Nueva Tarea</h1>


    <div id="frm1">

        <form class="formulario1" action="{{route('events.store')}}" method="post">
            @csrf
            <input type="hidden" class="boton" name="iduser" value="{{ Auth::id() }}" id=""><br>
            <label>
                Nombre:<br>
                <input type="text" class="boton" required name="title" value="{{old('title')}}" id="">
            </label>
            <br>
            <label>
                Detalles:<br>
                <textarea name="content" id="" required cols="100" class="boton" rows="10">{{old('content')}}</textarea>
            </label>
            <br>
            <label>
                Importante:
                <input type="checkbox" class="" name="important" {{ old() ? 'checked' : '' }} id=""><br><br>
            </label>
            <label>
                Fecha de vencimiento:
                <input type="date" class="" name="expirationDate" value="{{old('expirationDate')}}" id=""><br><br>
            </label>
            <button class="boton" type="submit">Crear Tarea</button>
        </form>
    </div>
    
    @if ($errors->any())
        <div>
            <h2>Error</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@stop
