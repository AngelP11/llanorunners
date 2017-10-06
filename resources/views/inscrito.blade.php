@extends('templates.main')

@section('content-header')
	<div class="evento-info">
        <img src="{{ asset('img/logo_llanorunners.png') }}" alt="Logo Llanorunners">
        <p class="txt-1">¡Felicidades! Ya esta inscrito en</p>
        <h1 class="title">"Cross Country Camburito 12k"</h1>
        <h2>Demuestra de que estas hecho</h2>
        <p class="txt-2">Te hemos enviado un correo electronico con la confirmacion de tu inscripcion</p>

        <div class="links">
            <a class="inscripsion" href="/">Volver a inicio</a>
            {{-- <a href="#">¿Qué es una carrera Cross Country?</a> --}}
        </div>
    </div>
@endsection