@extends('layouts.app')

@section('content')

<div class="table-responsive m-5">
    <table class="table">
        <h2 class="text-danger justify-heading"> <b>Paquetes:</b> </h2>

        <form action="">
            <div class="form-group">
              
                    
                    <a href="/nuevopaquete" class="btn btn-primary " ><b>Nuevo</b> </a>
               
            </div>
        </form>
        @if(Session::has('Crear_Paquete'))
                    <div class="alert alert-succes" role="alert">
                    {{Session::get('Crear_Paquete')}}
                    </div>
            @endif

        <caption>Lista de Paquetes</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoría</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($Paquete as $res) 
            <tr>
                <th scope="row">{{$res->id}}</th>
                <td><img src="{{asset('storage').'/'.$res->foto}}" alt="foto" width="200" height="130" ></td>
                <td>{{$res->nombre}}</td>
                <td>{{$res->categoria}}</td>
                <td>{{$res->descripcion}}</td>
                <td>{{$res->precio}}</td>
                <td>
                    <a href="/Actualizar/{{$res->id}}" class="btn btn-warning" ><b>Actualizar</b></a>
                    <a href="/Borrar/{{$res->id}}" class="btn btn-danger" onclick="return confirm('¿Desea ELIMINAR este PAQUETE?')"><b>Eliminar</b></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
