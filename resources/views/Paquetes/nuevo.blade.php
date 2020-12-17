@extends('layouts.app')

@section('content')
@csrf
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text text-danger"> <b>Nuevo Paquete:</b> </h3>
        <form action="">
            <div class="form-group">
                <label for="Nombre"> Nombre:</label>
                <input type="text" name="" class="form-control"  id="Nombre" placeholder="Ingrese Nombre del Paquete" Required>
            </div>
            <div class="form-group">
                <label for="categoria"> Categoría:</label>
                <select name="" id="categoria" class="form-control" placeholder="Seleccionar...">
                    <option>Seleccionar...</option>
                    <option value="Local">Local</option>
                    <option value="Nacional">Nacional</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion"> Descripción:</label>
                <textarea name="" id="descripcion" cols="30" rows="5"  class="form-control" placeholder="Descripción..." required></textarea>
            </div>
            <div class="form-group">
                <label for="precio"> Precio:</label>
                <input type="text" name="" class="form-control"  id="precio" placeholder="S/" Required>
            </div>
            <div class="form-group">
                <label for="foto"> Imagen:</label>
                <input type="file" name="" class="form-control"  id="foto" Required>
            </div>


            <div class="form-group">
                <button type="submit"  href="#" class="btn btn-warning mt-2">
                    Agregar
                </button>
            </div>
        </form>
    </div>
</div>

@endsection