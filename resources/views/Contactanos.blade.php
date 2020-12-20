<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Turismo</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"> <b>Logooo</b> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('Paquete.listaInicio')}}">Paquetes</a>
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

        <div class="container mb-3 mt-3">

            <div class="row">
                <div class="col-md-12">
                    <h1>Contáctenos</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3>¡Queremos Ayudarte!</h3>
                    <p>
                        Si tienes alguna duda o consulta, puedes usar este formulario o comunicarte con nosotros al 
                        +51 987 654 321.
                        <br>
                        <br>
                        Tenemos interés en ayudarte, para cualquier duda que puedas tener no dudes en llamarnos, también puedes usar el 
                        formulario para escribirnos directamente.
                        <br>
                        <br>
                        <b>Oficinas Cusco:</b>
                        <br>
                        Av. Sol #543
                        <br>
                        <br>
                        <b> Teléfono:</b>
                        <br>
                        +51 987 654 321.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>¡¡¡Llámanos o aún mejor visitanos!!!</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.2373095517764!2d-71.97649956776425!3d-13.521023021637795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd60aaee7a475%3A0x8c755f455f9b9804!2sAv%20El%20Sol%2C%20Cusco%2008002!5e0!3m2!1ses!2spe!4v1608313808384!5m2!1ses!2spe" width="650" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>        
        </div>

        <footer class="bg-light">
            <div class="container">
                <nav class="row">
                    <div class="col-md-6">
                        <h2>Escribenos:</h2>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=+51965131044" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon>+51 965 131 044</a>
                        </li>
                        <li>
                        <a href="https://api.whatsapp.com/send?phone=+51934996407" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon>+51 934 996 407</a>
                        </li>
                        <li>
                        <a href="https://api.whatsapp.com/send?phone=+51974254763" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon>+51 974 254 763</a>
                        </li>
                    </div>
                    <div class="col-md-3">
                        <a class="nav-link text-dark" href="/">Inicio</a>
                        <a class="nav-link text-dark" href="{{route('Paquete.listaInicio')}}">Paquetes</a>
                        <a class="nav-link text-dark" href="/contactanos">Contactanos</a>
                        <a class="nav-link text-dark" href="/nosotros">Nosotros</a>
                   </div>
                    <div class="col-md-3">
                            logoooooo
                    </div>
                </nav>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <!--Iconos-->
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    </body>
</html>
