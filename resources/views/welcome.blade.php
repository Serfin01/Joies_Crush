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
            <div>
                <input type="text">
                <img src="{{ asset('img/icons/buscador.png') }}" alt="icono buscador">
            </div>
            <div class="iconos">
                <img src="{{ asset('img/icons/perfil.png') }}" alt="icono perfil">
                <img src="{{ asset('img/icons/corazon.png') }}" alt="icono favoritos">
                <img src="{{ asset('img/icons/shopping-bag 1.png') }}" alt="icono tienda">
                <img src="{{ asset('img/icons/idioma 1.png') }}" alt="icono idioma">
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
