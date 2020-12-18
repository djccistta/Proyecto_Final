@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text text-danger"> <b>Actualizar Paquete:</b> </h3>
        <form action="{{(route('ActualizarPaquete'))}}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <input type="hidden" name="id" value="{{$Paquete->id}}">
            @if(Session::has('Paquete_Actualizado'))
                            <div class="alert alert-succes" role="alert">
                                {{Session::get('Paquete_Actualizado')}}
                            </div>
                            @endif
                <label for="Nombre"> Nombre:</label>
                <input type="text" name="nombre" value="{{$Paquete->nombre}}" class="form-control"  placeholder="Ingrese Nombre del Paquete" Required>
            </div>
            @csrf
            <div class="form-group">
                <label for="categoria"> Categoría:</label>
                <select name="categoria" value="{{$Paquete->categoria}}" class="form-control" placeholder="Seleccionar..." required>
                    <option>Seleccionar...</option>
                    <option value="Local">Local</option>
                    <option value="Nacional">Nacional</option>
                    {{$Paquete->descripcion}}
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion"> Descripción:</label>
                <textarea name="descripcion" value="{{$Paquete->descripcion}}"  cols="30" rows="5"  class="form-control" placeholder="Descripción..." required>{{$Paquete->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label for="precio"> Precio:</label>
                <input type="text" name="precio" value="{{$Paquete->precio}}" class="form-control"  placeholder="S/" Required>
            </div>
            <div class="form-group">
                <label for="foto"> Imagen:</label><br>
                <img src="{{ asset('storage').'/'.$Paquete->foto}}"  alt="foto" width="550" height="330">
                <input type="file" name="foto" id="foto" value="">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-warning mt-2">
                    Editar
                </button>
            </div>
        </form>
    </div>
</div>

@endsection