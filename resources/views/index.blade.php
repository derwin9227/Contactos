@extends('plantilla.plantilla')
@section('title', 'Contactos')
@section('body')    
    <div class="display-10">
    @if(session('mensaje'))
       <div class="alert alert-success">{{session('mensaje')}}</div> 
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Tlf</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacto as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>
                        <a href="{{route('contacto.detalle', $item)}}">
                            {{$item->nombre}}
                        </a>
                    </td>
                    <td>{{$item->apellido}}</td>
                    <td>{{$item->tlf}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{route('contacto.editar',$item->id)}}">Editar</a>
                        <form class="d-inline" action="{{route('contacto.eliminar',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$contacto->links()}}
    </div>
@endsection
