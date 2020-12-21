<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Turismo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://blog.elinsignia.com/wp-content/uploads/2019/06/viajes-jairan-1.png" height="70px" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse  justify-content-end " id="navbarNavDropdown">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item">
                                <a class="nav-link text-dark letra-nav" href="/"><b>Inicio</b></a>
                            </li>

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-dark letra-nav" href="{{ route('login') }}"><b>{{ __('Iniciar Sesión') }}</b></a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-dark letra-nav" href="{{ route('register') }}"><b>{{ __('Registrarse') }}</b></a>
                                </li>
                            @endif
                            
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link  text-dark letra-nav" href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b>{{ Auth::user()->name }}</b>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-dark letra-nav" href="/home"><b>Paquetes</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark letra-nav" href="/reservas"><b>Reservas</b></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="dropdown-item text-dark letra-nav" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <b>{{ __('Cerrar Sesión') }}</b>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




        <div class="container mb-5 mt-5">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>
