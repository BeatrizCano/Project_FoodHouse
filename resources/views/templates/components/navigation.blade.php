<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Food House</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/')}}">Food House</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">    
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">La Carta</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Nuestra Historia</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Todas nuestras especialidades</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Categorías</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Platos Populares</a></li>
                                <li><a class="dropdown-item" href="#!">Para Veganos</a></li>
                                <li><a class="dropdown-item" href="#!">Para Vegetarinos</a></li>
                                <li><a class="dropdown-item" href="#!">Gluten Free</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a href="{{route('cart')}}"><button class="btn btn-outline-dark">
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button></a>
                    </form>
                </div>
            </div>
        </nav>
        