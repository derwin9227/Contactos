@extends('plantilla.plantilla')
@section('title', 'Editar')
@section('body')
    <h1>Editar Contacto {{$contacto->id}}</h1>
    @if(session('mensaje'))
       <div class="alert alert-success">{{session('mensaje')}}</div> 
    @endif
    <div class="container">
        <form action="{{route('contacto.actualizar', $contacto->id)}}" method="post">
            @csrf
            @method('put')
            <input class="form-control mb-2" type="text" name="nombre" value="{{$contacto->nombre}}" placeholder="Nombre">
            @error('nombre')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            <input class="form-control mb-2" type="text" name="apellido" value="{{$contacto->apellido}}" placeholder="Apellido">
            @error('apellido')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            <input class="form-control mb-2" type="number" name="tlf" value="{{$contacto->tlf}}" placeholder="Telefono">
            @error('tlf')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            <div class="d-grid">
                <input type="submit" class="btn btn-warning" value="Actualizar">
            </div>
        </form>
    </div>
@endsection