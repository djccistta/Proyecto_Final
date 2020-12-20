<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Turismo</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body >
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
            <div class="container">
                <a class="navbar-brand" href="#"><b>Logo</b> </a>

                <div class="collapse navbar-collapse  justify-content-end " id="navbarNavDropdown" >
                    <ul class="navbar-nav " >
                        <li class="nav-item">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/paquete">Paquetes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactanos">Contactanos</a>
                        </li>
                        
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Principal</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                            </li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row  ">
                <div class="col-md-6">
                    <div class="card mt-3" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Paquete</h5>
                            <p class="card-text">Detalles:</p>
                            <p class="card-text">Precio:</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3><b>Reserve Aquí:</b></h3>
                    <form action="">
                        <div class="form-group">
                            <label for="Nombre"> Nombres:</label>
                            <input type="text" name="" class="form-control"  id="Nombre" placeholder="Ingrese Nombres" Required>
                        </div>
                        <div class="form-group">
                            <label for="Apellido"> Apellidos:</label>
                            <input type="text" name="" class="form-control"  id="Apellido" placeholder="Ingrese Apellidos" Required>
                        </div>
                        <div class="form-group">
                            <label for="mail"> Correo:</label>
                            <input type="mail" class="form-control"name="" class="form-control"  id="mail" placeholder="ejemplo@ejemplo.com" Required>
                        </div>
                        <div class="form-group">
                            <label for="cel"> N° Celular:</label>
                            <input type="text" name="" class="form-control"  id="cel" placeholder="Ingrese Número de Celular" Required>
                        </div>
                        <div class="form-group">
                            <label for="fecha"> Fecha de Tour:</label>
                            <input type="date" name="" class="form-control"  id="Fecha" placeholder="--/--/----" Required>
                        </div>
                        <div class="form-group">
                            <label for="adultos"> N° Adultos:</label>
                            <input type="number" name="" class="form-control"  id="adultos" placeholder="Ingrese Número de Adultos" Required>
                        </div>
                        <div class="form-group">
                            <label for="niños"> N° Niños:</label>
                            <input type="number" name="" class="form-control"  id="niños" placeholder="Ingrese Número de Niños" Required>
                        </div>

                        <div class="form-group">
                            <button type="submit"  href="#" class="btn btn-success mt-2" onclick="return confirm('¿Desea RESERVAR este TOUR?')">
                                Reservar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="bg-light mt-3">
            <div class="container">
                <nav class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <a class="nav-link text-dark" href="/">Inicio</a>
                        <a class="nav-link text-dark" href="/paquete">Paquetes</a>
                        <a class="nav-link " href="{{ route('nuevo') }}">Reservas</a>
                        <a class="nav-link text-dark" href="/contactanos">Contactanos</a>
                        <a class="nav-link text-dark" href="/nosotros">Nosotros</a>
                   </div>
                    <div class="col-md-3">
                            logo
                    </div>
                </nav>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>