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
        <?php $cuenta=1; ?>
        <thead>
            <tr>
                <th scope="col">N°</th>
                <!-- <th scope="col">Paquete</th> -->
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha</th>
                <th scope="col">Telefono</th>
                <th scope="col">E-mail</th>
                <th scope="col">N° Adultos</th>
                <th scope="col">N° Niños</th>
                <!-- <th scope="col">Total</th> -->
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($reserva as $res)
            <tr>
                <td> <?php  echo $cuenta;
                        $cuenta++; ?> </td>
                <td>{{ $res->nombrepersona }}</td>
                <td>{{ $res->apellidopersona }}</td>
                <td>{{ $res->fecha }}</td>
                <td>{{ $res->telefono }}</td>
                <td>{{ $res->correo }}</td>
                <td>{{ $res->nroadultos }}</td>
                <td>{{ $res->nroniños }}</td>
                <td>
                    <a href="{{route('reserva.update',$res)}}" class="btn btn-danger"><b>Actualizar</b></a>
                    <a href="{{route('reserve.delete', $res)}}" class="btn btn-warning"><b>Eliminar</b></a>
                </td>
            </tr>

            @endforeach

            </tr>
        </tbody>
    </table>
</div>

@endsection