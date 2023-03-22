<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <title>Joies Crush</title>
</head>
<body>
    <div class="preHeader">
        <p>ENVIAMENT GRATUÏT. Comandes superiors a 35€</p>
    </div>
    <div class="header">
        <div>
            <img src="{{ asset('img/icons/JoyesCrushLogo 1.png') }}" alt="JoiesCrush Logo">
            <h1>Joies Crush</h1>
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
                <img class="iconos" src="{{ asset('img/icons/perfil.png') }}" alt="icono perfil">
                <img class="iconos" src="{{ asset('img/icons/corazon.png') }}" alt="icono favoritos">
                <img class="iconos" src="{{ asset('img/icons/shopping-bag 1.png') }}" alt="icono tienda">
                {{-- <img class="iconos" src="{{ asset('img/icons/idioma 1.png') }}" alt="icono idioma"> --}}
            </div>
        </div>
    </div>
    <div class="nav">
        <a href="#">Coleccions</a>
        <a href="#">Arrecades</a>
        <a href="#">Galeria d’estils</a>
        <a href="#">Sobre nosaltres</a>
        <a href="#">Contacte</a>
    </div>
    <div class="heroSection">

    </div>
    <div class="intro">
        <div>
            <h2>ESTÁS BUSCANT LA TEVA <i>CRUSH</i>?</h2>
            <p>Busquem la joia que més et defineixi, la que més t'enamori.</p>
            <p>Amb argila polimèrica dissenyem la teva arracada única i especial.
                Al igual que les les teves històries d’amor, mai trobaràs una crush igual.</p>
            <a href="">Anar al catàleg</a>
        </div>
        <div>
            <img src="" alt="pendiente">
            <img src="" alt="pendiente">
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
