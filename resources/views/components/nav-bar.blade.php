<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route ('home')}}"><img src=" {{ asset('img/PELIQUERÍAj.png') }}" alt="" width="200px"></a>
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
                        <a class="nav-link active links" aria-current="page" href="{{ route ('products')}}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active links" aria-current="page" href="{{ route ('contact')}}">Contacto</a>
                    </li>
                </ul>
            </div>
                <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <input type="submit" class="btn btn-warning" value="¿No eres {{auth()-> user()->name }} ?">

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
            </div>

        </div>
    </div>
</nav>