<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
    <link rel="shortcut icon" href="/img/logo-vitec.png" type="image/x-icon">

    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="/img/logo-vitec.png" width="50px"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-edit">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Cadastrar</a>
                        </li>
                        @endguest

                        @auth
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Inicio</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Clientes
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/cliente/listar">Listar Clientes</a></li>
                                <li><a class="dropdown-item" href="/cliente/cadastrar">Cadastrar Cliente</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ordem de serviço
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/os/listar">Listar OS</a></li>

                                <li><a class="dropdown-item" href="/os/cadastrar">Cadastrar OS</a></li>

                            </ul>
                        </li>

                        @can('admin')
                        <li class="nav-item me-auto">
                            <a class="nav-link" href="/register">Cadastrar usuario</a>
                        </li>
                        @endcan

                        <form action="/logout" method="post" class="my-auto">
                            @csrf
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                                <li class="nav-item me-auto">
                                    <a class="nav-link" href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                </li>

                            </ul>
                        </form>


                        @endauth

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <main>
    @auth
        <p>Usuario: {{auth()->user()->name}}</p>
    @endauth

        @if(session('msg'))
        <p class="msg"> {{session('msg')}} </p>
        @endif
        @yield('content')
    </main>

    <footer>
        <p> &copy; VitechDev</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>

</html>
