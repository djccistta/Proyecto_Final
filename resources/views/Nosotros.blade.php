<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Turismo</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body >
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"> 
                    <img src="https://blog.elinsignia.com/wp-content/uploads/2019/06/viajes-jairan-1.png" height="70px" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="nav-link text-dark letra-nav" href="/"> <b>Inicio</b> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark  letra-nav" href="{{route('Paquete.listaInicio')}}"> <b>Paquetes</b> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark letra-nav" href="/nosotros"><b>Nosotros</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark  letra-nav" href="/contactanos"><b>Contactanos</b></a>
                        </li>
                        
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link text-dark  letra-nav" href="{{ url('/home') }}"><b>Principal</b></a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link text-dark  letra-nav" href="{{ route('login') }}"><b>Ingresar</b></a>
                            </li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>AGENCIA DE VIAJES EN PERU</h1>
                    <h4>Turismo de Calidad</h4>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <h3>Quienes Somos</h3>
                <hr/>
                <p>
                    Somos una agencia de viajes y operador turístico que brinda servicios de turismo en Perú, con altos estándares de calidad y seguridad para nuestros clientes, satisfaciendo sus expectativas con un staff de profesionales con vasta experiencia en turismo, brindando asesoría para su elección de paquetes con tarifas competitivas, ofertas a la medida de cada cliente usando el desarrollo tecnológico para facilitar distintos canales de pago.
                    Versátil a la necesidad mas exigente de cada cliente.
                </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Misión</h4>
                    <p>
                        Contribuir con el desarrollo del turismo en nuestro país, de manera sostenible, brindando servicios de calidad con valor agregado cubriendo las expectativas de nuestros clientes como “una experiencia inolvidable”.
                    </p>
                </div>
                <div class="col-md-6">
                    <h4>Visión</h4>
                    <p>
                        Ser reconocida como la mejor empresa de turismo en el Perú, comprometida en el desarrollo e innovación de servicio y calidad para beneficio de nuestros clientes.
                    </p>
                </div>
            </div>    
            <div class="row">
                <h4>Valores</h4>
                <div class="col-md-4">
                    <p><ion-icon name="arrow-forward-circle-outline"></ion-icon>Integridad.</p>
                    <p><ion-icon name="arrow-forward-circle-outline"></ion-icon>Honestidad.</p>
                    <p><ion-icon name="arrow-forward-circle-outline"></ion-icon>Servicio.</p>
                </div>
                <div class="col-md-4">
                    <p><ion-icon name="arrow-forward-circle-outline"></ion-icon>Lealtad.</p>
                    <p><ion-icon name="arrow-forward-circle-outline"></ion-icon>Seguridad.</p>
                    <p><ion-icon name="arrow-forward-circle-outline"></ion-icon>Plena Satisfacción del Cliente.</p>
                </div>
                <div class="col-md-4">
                    <p><ion-icon name="arrow-forward-circle-outline"></ion-icon>
                        Pensando en su seguridad y comodidad contamos con diversas formas de pago con tarjeta de debito o crédito visa, con link con cualquier tarjeta de crédito, transferencias electrónicas, depósitos en cuentas bancarias, transferencias via wester union, transferencias interbancaria y otros.
                    </p>   
                </div>
            </div>       
        </div>

        <footer class="bg-light">
            <div class="container">
                <nav class="row">
                    <div class="col-md-3 mt-3 ">

                    </div>
                    <div class="col-md-3">
                        <br>
                        <h2 class="text-dark">Escribenos:</h2>
                            <ion-icon name="logo-whatsapp" class="text-success icono"></ion-icon>
                            <a class="text-dark" href="https://api.whatsapp.com/send?phone=+51965131044" target="_blank"><b>+51 965 131 044</b></a>
                        <br>
                            <ion-icon name="logo-whatsapp" class="text-success icono"></ion-icon>
                            <a class="text-dark" href="https://api.whatsapp.com/send?phone=+51934996407" target="_blank"><b>+51 934 996 407</b></a>
                        <br>
                            <ion-icon name="logo-whatsapp" class="text-success icono"></ion-icon>
                            <a class="text-dark" href="https://api.whatsapp.com/send?phone=+51974254763" target="_blank"><b>+51 974 254 763</b></a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <br>
                        <a class="text-dark icono" href="/"><ion-icon name="home-outline"></ion-icon> <b>Inicio</b></a>
                        <br>
                        <a class="text-dark icono" href="{{route('Paquete.listaInicio')}}"><ion-icon name="location-outline"></ion-icon><b>Paquetes</b></a>
                        <br>
                        <a class="text-dark icono" href="/nosotros"><ion-icon name="people-outline"></ion-icon><b>Nosotros</b></a>
                        <br>
                        <a class="text-dark icono" href="/contactanos"><ion-icon name="call-outline"></ion-icon><b>Contactanos</b></a>
                        
                   </div>
                    <div class="col-md-3 mt-3 ">
                        <img src="https://blog.elinsignia.com/wp-content/uploads/2019/06/viajes-jairan-1.png" height="150px" />
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
