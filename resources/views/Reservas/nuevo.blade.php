@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text text-danger"> <b>Nueva Reserva:</b> </h3>
        <form action=" {{route('savereserve')}} " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Nombre"> Nombre del Tour:</label>
                <select class="form-control" name="paquete_id" id="">
                    @foreach($paquete as $item)
                    <option value="{{$item->id}} " class="form-control">{{$item->nombre}} - {{$item->precio}}</option>
                    @endforeach
                </select>


            </div>

            <div class="form-group">
                <label for="nombreCliente"> Nombre Cliente:</label>
                <input type="text" name="nomcliente" class="form-control" id="nombreCliente" placeholder="Ingrese Nombre del Cliente" Required>
            </div>
            <div class="form-group">
                <label for="apeCliente"> Apellidos Cliente:</label>
                <input type="text" name="apecliente" class="form-control" id="apeCliente" placeholder="Ingrese Apellidos del Cliente" Required>
            </div>
            <div class="form-group">
                <label for="mail"> Correo:</label>
                <input type="mail" class="form-control" name="correo" class="form-control" id="mail" placeholder="ejemplo@ejemplo.com" Required>
            </div>
            <div class="form-group">
                <label for="cel"> N° Celular:</label>
                <input type="text" name="ncelular" class="form-control" id="cel" placeholder="Ingrese Número de Celular" Required>
            </div>
            <div class="form-group">
                <label for="fecha"> Fecha de Tour:</label>
                <input type="date" name="ftour" class="form-control" id="Fecha" placeholder="--/--/----" Required>
            </div>
            <div class="form-group">
                <label for="adultos"> N° Adultos:</label>
                <input type="number" name="nadultos" class="form-control" id="adultos" placeholder="Ingrese Número de Adultos" min="0" Required>
            </div>
            <div class="form-group">
                <label for="niños"> N° Niños:</label>
                <input type="number" name="nniños" class="form-control" id="niños" placeholder="Ingrese Número de Niños" min="0" Required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning mt-2">
                    Listo
                </button>
            </div>
        </form>
    </div>
</div>


@endsection