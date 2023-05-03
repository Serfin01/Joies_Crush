<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.min.css" integrity="sha384-fhRMDwS2GPtEk5g5Cx5QXdtyX9zUK5u43BdDniv5fFZn8wZjJHztSl5o5PQh5yVi" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-dfJnsbJh5H7yX/Ht8GgO50zDDghBcLZBxveG8lQDjOms1F2vH9XhW8ODPLvl/K3s" crossorigin="anonymous"></script>

    <title>Joies Crush</title>
</head>
<body>
    <div class="preHeader">
        <p>ENVIAMENT GRATUÏT. Comandes superiors a 35€</p>
    </div>
    <div class="header">
        <div>
            <img class="logoJoiesCrush" src="{{ asset('img/icons/JoyesCrushLogo.jpg') }}" alt="JoiesCrush Logo"><a href="/" ><h1>Joies Crush</h1></a>
        </div>
        <div>
            <div class="search-container">
                <form id="form" role="search">
                    <input type="search" id="query" name="q"
                    placeholder="Buscar..."
                    aria-label="Search through site content">
                    <button>
                        <svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
                      </button>
                    </form>
            </div>
            <div>
                @if (Auth::check())
                    <a href="{{ url('/dashboard') }}"><img class="iconos" src="{{ asset('img/icons/user.svg') }}" alt="icono perfil"></a>
                @else
                    <a href="{{ url('/login') }}"><img class="iconos" src="{{ asset('img/icons/user.svg') }}" alt="icono perfil"></a>
                @endif
                <img class="iconos" src="{{ asset('img/icons/heart.svg') }}" alt="icono favoritos">
                <a class="cart-count" href="{{ url('/cart') }}">
                    <img class="iconos" src="{{ asset('img/icons/bag.svg') }}" alt="icono tienda">
                    @if($user->cartItems()->count() > 0)
                        <div>{{ $user->cartItems()->count() }}</div>
                    @endif
                </a>
                {{-- <img class="iconos" src="{{ asset('img/icons/idioma 1.png') }}" alt="icono idioma"> --}}
            </div>
        </div>
    </div>
    <div class="nav">
        <a href="/pendientes" class="{{ request()->is('pendientes') ? 'navPink' : '' }}">Arrecades</a>
        <a href="/galeria" class="{{ request()->is('galeria') ? 'navPink' : '' }}">Galeria d’estils</a>
        <a href="/aboutUs" class="{{ request()->is('aboutUs') ? 'navPink' : '' }}">Sobre nosaltres</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'navPink' : '' }}">Contacte</a>
    </div>
    <div class="space"></div>
