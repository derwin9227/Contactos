@extends('plantilla.plantilla')
@section('title', 'Exportar')
@section('body')

    <h1>Exportar lista completa de contactos</h1>
    <a href="{{route('exportar.detalle')}}" class="my-2 btn btn-warning">Exportar</a>
@endsection