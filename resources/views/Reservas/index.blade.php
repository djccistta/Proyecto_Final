@extends('layouts.app')

@section('content')

<div class="table-responsive m-5">
    <table class="table">
        <h2 class="text-danger justify-heading"> <b>Reservas:</b> </h2>
        <div class="form-group">
            <a href="{{ route('nuevo') }}"> 
                <button class="btn btn-primary ">
                    <font color="white"> Nuevo </font>
                </button> 
            </a>
        </div>
        <caption>Lista de Reservas</caption>
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Paquete</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha</th>
                <th scope="col">Telefono</th>
                <th scope="col">E-mail</th>
                <th scope="col">N° Adultos</th>
                <th scope="col">N° Niños</th>
                <th scope="col">Total</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1asa</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="" class="btn btn-warning"><b>Actualizar</b></a>
                    <a href="" class="btn btn-danger"><b>Eliminar</b></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection