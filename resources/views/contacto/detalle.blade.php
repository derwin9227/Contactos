@extends('plantilla.plantilla')
@section('title', 'Detalles')
@section('body')
    <div class="container py-2">
        <h1 class="">detalle de contacto</h1>
        <h4>id: {{$contacto->id}}</h4>
        <h4>nombre: {{$contacto->nombre}}</h4>
        <h4>apellido: {{$contacto->apellido}}</h4>
        <h4>Telefono: {{$contacto->tlf}}</h4>
    </div>
    @endsection