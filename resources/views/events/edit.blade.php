@extends('layouts.master')

@section('titulo', 'Editar link')

@section('content')
    <h1>Editar Tarea</h1>
    <div id="frm1">
        <center> 
        <form class="formulario1" action="{{route('events.update',$event)}}" method="post">
            @csrf
            @method('PUT')

            <input type="hidden" class="boton" name="iduser" value="{{ Auth::id() }}" id="">
            <label>
                Nombre:<br>
                <input type="text" class="boton" name="title" value="{{old('title',$event->title)}}" id="">
            </label>
            <br>
            <br>
            <label>
                Detalles:<br>
                <textarea name="content" id="" cols="100" class="boton" rows="10">{{old('content',$event->content)}}</textarea>
            </label>
            <br>
            {{-- <label>
                Importante:
                <input type="checkbox" class="" name="important" {{ $event->important ? 'checked' : '' }} value="{{checked ?? 'true';'false'}}" id="">
            </label><br><br> --}}
            <label>
                Fecha de vencimiento:
                <input type="date" class="" name="expirationDate" value="{{ old('expirationDate', $event->expirationDate ? \Carbon\Carbon::parse($event->expirationDate)->format('Y-m-d') : '') }}" id="">
            </label>
            <br>
            <br>
            <button type="submit" class="boton">Actualizar Tarea</button><br>
            <br>
            <a href="./">Volver</a>
        </form>
        </center>
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
