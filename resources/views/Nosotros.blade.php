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
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height:100vh" >
                                <img class="d-block w-100" src="https://lh3.googleusercontent.com/proxy/AXI5ieeYXfSG4THzdtB-EhR6zEX8yi1C2X0iCpvfqecnEWzyErLCo2wtAm-Y5bk1rMNxEvKRxcmMwOoU4fiSgdX3VU6z40TdTqFlv7_-A2ivyJLRMEOO5Fgk7OEGiH7lPi5qM0gt6WKX8bg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1 >AGENCIA DE VIAJES EN PERU</h1>
                                    <p>Turismo de Calidad</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="height:100vh">
                                <img class="d-block w-100" src="https://ak.picdn.net/shutterstock/videos/6529877/thumb/1.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>AGENCIA DE VIAJES EN PERU</h1>
                                    <p>Turismo de Calidad</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="height:100vh">
                                <img class="d-block w-100" src="https://i.pinimg.com/originals/10/f3/cb/10f3cbc7a73edb7e228b68842e57ea7a.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>AGENCIA DE VIAJES EN PERU</h1>
                                    <p>Turismo de Calidad</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <h3 style="color: darkblue;">Quienes Somos</h3>
                    <hr/>
                    <p>
                        Somos una agencia de viajes y operador turístico que brinda servicios de turismo en Perú, con altos estándares de calidad y seguridad para nuestros clientes, satisfaciendo sus expectativas con un staff de profesionales con vasta experiencia en turismo, brindando asesoría para su elección de paquetes con tarifas competitivas, ofertas a la medida de cada cliente usando el desarrollo tecnológico para facilitar distintos canales de pago.
                        Versátil a la necesidad mas exigente de cada cliente.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4 style="color: darkblue;">Misión</h4>
                    <hr/>
                    <p>
                        Contribuir con el desarrollo del turismo en nuestro país, de manera sostenible, brindando servicios de calidad con valor agregado cubriendo las expectativas de nuestros clientes como “una experiencia inolvidable”.
                    </p>
                </div>
                <div class="col-md-6">
                    <h4 style="color: darkblue;">Visión</h4>
                    <hr/>
                    <p>
                        Ser reconocida como la mejor empresa de turismo en el Perú, comprometida en el desarrollo e innovación de servicio y calidad para beneficio de nuestros clientes.
                    </p>
                </div>
            </div>    
            <div class="row">
                <h4 style="color: darkblue;">Valores</h4>
                <hr/>
                <div class="col-md-4" >
                    <p class="icono"><ion-icon name="arrow-forward-circle-outline" class="text-danger" style="opacity: 50%;"></ion-icon>Integridad.</p>
                    <p class="icono"><ion-icon name="arrow-forward-circle-outline" class="text-danger" style="opacity: 50%;"></ion-icon>Honestidad.</p>
                    <p class="icono"><ion-icon name="arrow-forward-circle-outline" class="text-danger" style="opacity: 50%;"></ion-icon>Servicio.</p>
                </div>
                <div class="col-md-4">
                    <p class="icono"><ion-icon name="arrow-forward-circle-outline" class="text-danger" style="opacity: 50%;"></ion-icon>Lealtad.</p>
                    <p class="icono"><ion-icon name="arrow-forward-circle-outline" class="text-danger" style="opacity: 50%;"></ion-icon>Seguridad.</p>
                    <p class="icono"><ion-icon name="arrow-forward-circle-outline" class="text-danger" style="opacity: 50%;"></ion-icon>Plena Satisfacción del Cliente.</p>
                </div>
                <div class="col-md-4">
                    <p class="icono"><ion-icon name="arrow-forward-circle-outline" class="text-danger" style="opacity: 50%;"></ion-icon>
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
