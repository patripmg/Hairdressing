<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route ('home')}}"><img src=" {{ asset('img/PELIQUERÍAj.png') }}" alt=""
                    width="200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active links" aria-current="page" href="{{ route ('home')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active links" aria-current="page"
                                href="{{ route ('products')}}">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active links" aria-current="page"
                                href="{{ route ('contact')}}">Contacto</a>
                        </li>
                    </ul>
                </div>

                <div>
        
                    <ul class="navbar-nav">
                                 <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                 <li class="nav-item">
                                             <a class="nav-link" href="{{ route('login') }}">INICIAR SESIÓN</a>
                                         </li>
                                     @endif
         
                                     @if (Route::has('register'))
                                         <li class="nav-item">
                                             <a class="nav-link" href="{{ route('register') }}">REGISTRO</a>
                                         </li>
                                     @endif
                                 @else
                                     <li class="nav-item dropdown">
                                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            ¡HOLA {{ Auth::user()->name }}!
                                         </a>
         
                                         <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                             <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                 Cerrar sesión
                                             </a>
         
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                 @csrf
                                             </form>
                                         </div>
                                     </li>
                                 @endguest
                             </ul>
                           </div>
         
               </div>
                {{-- <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @auth
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <input type="submit" class="btn btn-warning" value="¡Hola {{auth()-> user()->name }} !">

                            </form>

                        </li>

                        @else
                        <li class="nav-item">
                            <a class="nav-link active links" aria-current="page" href="{{ route ('login')}}">Iniciar
                                sesión</a>
                        <li class="nav-item">
                            <a class="nav-link active links" aria-current="page"
                                href="{{ route ('register')}}">Registrarse</a>
                        </li>

                        @endauth



                        </li>
                    </ul>
                </div> --}}

            </div>
        </div>
    </nav>

    @yield('content')

    <br>
    <x-notification />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
