<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
