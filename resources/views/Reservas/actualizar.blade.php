@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text text-danger"> <b>Actualizar Reserva:</b> </h3>
        <form action=" {{route('update.save')}} " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{$res->id}}">
            </div>

            <div class="form-group">
                <label for="Nombre"> Nombre del Tour:</label>
                <select class="form-control" name="paquete_id" id="paquete_id">
                    @foreach($paquete as $item)
                    <option value="{{$item->id}}" class="form-control">{{$item->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nombreCliente"> Nombre Cliente:</label>
                <input type="text" name="nomcliente" value="{{ $res->nombrepersona }}" class="form-control" id="nombreCliente" placeholder="Ingrese Nombre del Cliente" Required>
            </div>
            <div class="form-group">
                <label for="apeCliente"> Apellidos Cliente:</label>
                <input type="text" name="apecliente" value="{{ $res->apellidopersona }}" class="form-control" id="apeCliente" placeholder="Ingrese Apellidos del Cliente" Required>
            </div>
            <div class="form-group">
                <label for="mail"> Correo:</label>
                <input type="mail" value="{{ $res->correo }}" name="correo" class="form-control" name="" class="form-control" id="mail" placeholder="ejemplo@ejemplo.com" Required>
            </div>
            <div class="form-group">
                <label for="cel"> N° Celular:</label>
                <input type="text" value="{{ $res->telefono }}" name="ncelular" class="form-control" id="cel" placeholder="Ingrese Número de Celular" Required>
            </div>
            <div class="form-group">
                <label for="fecha"> Fecha de Tour:</label>
                <input type="date" value="{{ $res->fecha }}" name="ftour" class="form-control" id="Fecha" placeholder="--/--/----" Required>
            </div>
            <div class="form-group">
                <label for="adultos"> N° Adultos:</label>
                <input type="number" value="{{ $res->nroadultos }}" name="nadultos" class="form-control" id="adultos" placeholder="Ingrese Número de Adultos" min="0" Required>
            </div>
            <div class="form-group">
                <label for="niños"> N° Niños:</label>
                <input type="number" value="{{ $res->nroniños }}" name="nniños" class="form-control" id="niños" placeholder="Ingrese Número de Niños" min="0" Required>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-6">
                        <button type="submit" href="#" class="btn btn-warning mt-2" onclick="return confirm('¿Desea EDITAR esta RESERVA?')">
                            Editar
                        </button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <a href="../reservas">
                        <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('¿Cancelar la Actualizacion?')">
                            Cancelar
                        </button>
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection