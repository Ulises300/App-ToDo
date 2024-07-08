@extends('layouts.master')

@section('titulo', 'inicio')

@section('content')
    <div id="frm1">
        <a href="{{route('events.create')}}">Agregar Tarea</a><br>


        
    </div><br>'
    <center>
        <div id="listado-items">
            @foreach ($events as $event)
            <a href="{{route('events.show',$event)}}">
                    <div class="renglon-datos">
                        <p>{{$event->title}}</p>
                        <div class="opciones">☰</div>
                    </div></a>
            @endforeach
        </div>
    </center>

    {{$events->links()}}
@stop
