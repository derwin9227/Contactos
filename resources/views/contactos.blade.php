@extends('plantilla.plantilla')
@section('title', 'Agregar')
@section('body')
    <h1>Guardar Contacto</h1>
    @if(session('mensaje'))
       <div class="alert alert-success">{{session('mensaje')}}</div> 
    @endif
    <div class="container">
        <form action="{{route('contacto.crear')}}" method="post">
            @csrf
            <input class="form-control mb-2" type="text" name="nombre" value="{{old('nombre')}}" placeholder="Nombre">
            @error('nombre')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            <input class="form-control mb-2" type="text" name="apellido" value="{{old('apellido')}}" placeholder="Apellido">
            @error('apellido')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            <input class="form-control mb-2" type="number" name="tlf" value="{{old('tlf')}}" placeholder="Telefono">
            @error('tlf')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            <div class="d-grid">
                <input type="submit" class="btn btn-success" value="Guardar">
            </div>
        </form>
    </div>
@endsection
