@extends('layouts.master')

@section('titulo', 'Detalles')

@section('content')
<center><br><div class="formulario">

            <h1>{{$event->title}} </h1><br>
            <h2>{{$event->content}} </h2><br>
            <p>Importante: {{ $event->important ? 'Sí' : 'No' }} </p><br>
            <p>Fecha de vencimiento: {{$event->expirationDate}} </p><br>
            <a href="{{route('events.edit',$event)}}">Editar</a>
            <form action="{{route('events.destroy',$event)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar Tarea</button>
            </form>
            <a href="{{route('events.index')}}">Volver a mis tareas</a>

            </div></center>
@stop
