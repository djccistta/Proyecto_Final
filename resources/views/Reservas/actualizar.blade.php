@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text text-danger"> <b>Actualizar Reserva:</b> </h3>
        <form action="">
            <div class="form-group">
                <label for="Nombre"> Nombre del Tour:</label>
                <input type="text" name="" value="" class="form-control"  id="Nombre" placeholder="Ingrese Nombre del Tour" Required>
            </div>
            <div class="form-group">
                <label for="nombreCliente"> Nombre Cliente:</label>
                <input type="text" name="" value="" class="form-control"  id="nombreCliente" placeholder="Ingrese Nombre del Cliente" Required>
            </div>
            <div class="form-group">
                <label for="apeCliente"> Apellidos Cliente:</label>
                <input type="text" name="" value="" class="form-control"  id="apeCliente" placeholder="Ingrese Apellidos del Cliente" Required>
            </div>
            <div class="form-group">
                <label for="mail"> Correo:</label>
                <input type="mail" value="" class="form-control"name="" class="form-control"  id="mail" placeholder="ejemplo@ejemplo.com" Required>
            </div>
            <div class="form-group">
                <label for="cel"> N° Celular:</label>
                <input type="text" value="" name="" class="form-control"  id="cel" placeholder="Ingrese Número de Celular" Required>
            </div>?
            <div class="form-group">
                <label for="fecha"> Fecha de Tour:</label>
                <input type="date" value="" name="" class="form-control"  id="Fecha" placeholder="--/--/----" Required>
            </div>
            <div class="form-group">
                <label for="adultos"> N° Adultos:</label>
                <input type="number" value="" name="" class="form-control"  id="adultos" placeholder="Ingrese Número de Adultos" min="0" Required>
            </div>
            <div class="form-group">
                <label for="niños"> N° Niños:</label>
                <input type="number" value="" name="" class="form-control"  id="niños" placeholder="Ingrese Número de Niños" min="0" Required>
            </div>
            <div class="form-group">
                <button type="submit"  href="#" class="btn btn-warning mt-2" onclick="return confirm('¿Desea EDITAR esta RESERVA?')">
                    Editar
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
