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
        

        <div class="container mb-5 mt-5">

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
                                <img class="d-block w-100" src="https://i.ytimg.com/vi/n5dooQMzFi0/maxresdefault.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" style="height:100vh">
                                <img class="d-block w-100" src="https://i.ytimg.com/vi/MmpX5eLf9eQ/maxresdefault.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" style="height:100vh">
                                <img class="d-block w-100" src="https://viajes.nationalgeographic.com.es/medio/2018/12/18/amazonia-peruana_6b936ba1_1600x1067.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
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
