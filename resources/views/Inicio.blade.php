<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Turismo</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body >
    <a class="nav-link" href="{{ route('new') }}">nasfjfhalsjdfhalsdjfhajf</a>

        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"> <b>Logo</b> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/paquete">Paquetes</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('nuevo') }}">Reservas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactanos">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nosotros">Nosotros</a>
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

            <div class="row mt-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group">
                            <input type="search" name="" placeholder="Buscar..." required size="50px"> 
                            <input type="submit" class="btn btn-success" value="Buscar">
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <!--En aqui mostrara la información que el cliente busco -->
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h3 class=" text-danger"> <b> Promociones</b></h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!--En aqui mostrara las promociones -->
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
                        <a class="nav-link text-dark" href="{{ route('nuevo') }}">Reservas</a>
                        <a class="nav-link text-dark" href="/contactanos">Contactanos</a>
                        <a class="nav-link text-dark" href="/nosotros">Nosotros</a>
                </div>
                    <div class="col-md-3">
                            <h3 class="mt-5">Logoooooo</h3>
                    </div>
                </nav>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
