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

            <div>
                <div class="container-fluid">
                    <form class="d-flex">
                    <input class="form-control me-2" name="name" type="search" placeholder="Buscar..." aria-label="Search" style="width:500px; transform:translateX(400px)">
                    <button class="btn btn-outline-success" type="submit" style="width:75px; transform:translateX(400px)">Buscar</button>
                    </form>
                </div>
            </div>

            <div class="row">


                <h2 class="text-danger"> <b>Paquetes Locales:</b> </h2>

                @foreach($Paquete as $paquete)
                @if($paquete->categoria=="Local")
                <div class="card mt-3" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage').'/'.$paquete->foto}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: {{ $paquete->nombre }}</h5>
                        <p class="card-text"> Detalles: {{ $paquete->descripcion }}</p>
                        <p class="card-text">Precio: S/. {{ $paquete->precio }}</p>
                        <a href="{{ route('reserva-tour',$paquete->id) }}" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
                @endif
                @endforeach

            </div>

            <div class="row mt-5">

                <h2 class="text-danger"> <b>Paquetes Nacionales:</b> </h2>
                @foreach($Paquete as $paquete)
                @if($paquete->categoria=="Nacional")
                <div class="card mt-3" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage').'/'.$paquete->foto}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: {{$paquete->nombre}}</h5>
                        <p class="card-text">Detalles: {{$paquete->descripcion}}</p>
                        <p class="card-text">Precio: S/.{{$paquete->precio}}</p>
                        <a href="/reservar" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
                @endif
                @endforeach

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
            
    </body>
</html>