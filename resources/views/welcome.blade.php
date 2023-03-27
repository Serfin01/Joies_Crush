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
        <div class="bxslider">
            <div><div class="slideText" id="carruselText1"><h4>AMOR ÚNIC</h4><p>Dissenyem les teves arracades artesanalment i amb molta cura. Cada disseny és únic, així com cada Crush que t’agrada.</p></div><img id="slide1" src="{{ asset('img/carrusel/carrusel1.JPG') }}" alt="pendiente morado"></div>
            <div><div class="slideText" id="carruselText2"><h4>COLOR <i>CRUSH</i></h4><p>Busca el color de la teva personalitat.<br>La que et faci única i et defineixi.</p></div><img id="slide2" src="{{ asset('img/carrusel/carrusel2.png') }}" alt="pendiente morado"></div>
            <div><div class="slideText" id="carruselText3"><h4>AMB CURA I AMOR</h4><p>Dissenyem les teves arrecades artesanament i amb molta cura.<br>Perquè et mereixes bellesa, et mereixes una bona Crush</p></div><img id="slide3" src="{{ asset('img/carrusel/carrusel3.jpg') }}" alt="mujer con pendiente"></div>
            <div><div class="slideText" id="carruselText4"><h4><i>PERFECT DATE</i></h4><p>Perfecta per qualsevol ocasió. Tant per moments casuals i ocasions especials i elegants.</p></div><img id="slide4" src="{{ asset('img/carrusel/carrusel4.jpg') }}" alt="pendiente morado"></div>
            <div><div class="slideText" id="carruselText5"><h4>AMOR MODELABLE</h4><p>Disposem de totes les formes que vulguis i fins i tot amb la possibilitat de què siguin personalitzades.</p></div><img id="slide5" src="{{ asset('img/carrusel/carrusel5.JPG') }}" alt="pendiente rojo"></div>
            <div class="bx-pager">
                <a data-slide-index="0" href="" class="pagerDot">•</a>
                <a data-slide-index="1" href="" class="pagerDot">•</a>
                <a data-slide-index="2" href="" class="pagerDot">•</a>
                <a data-slide-index="3" href="" class="pagerDot">•</a>
                <a data-slide-index="4" href="" class="pagerDot">•</a>
            </div>
        </div>
    </div>
    <div class="intro">
        <div>
            <h2>ESTÁS BUSCANT LA TEVA <i>CRUSH</i>?</h2>
            <p>Busquem la joia que més et defineixi, la que més t'enamori.</p>
            <p>Amb argila polimèrica dissenyem la teva arracada única i especial.
                Al igual que les les teves històries d’amor, mai trobaràs una crush igual.</p>
            <a href="">Anar al catàleg</a>
        </div>
        <div class="pendientesDibu">
            <img src="{{ asset('img/dibujos/arracada1.png') }}" alt="pendiente">
            <img src="{{ asset('img/dibujos/arracada2.png') }}" alt="pendiente">
        </div>
    </div>
    <div class="novedades">
        <div class="novTitle">
            <h2>NOVETATS</h2>
        </div>
        <div class="genero">
            <div class="item">
                <img class="itemImage" src="{{ asset('img/novedades/n1.jpg') }}" alt="pendiente azul">
                <p>17,50€</p>
                <div class="itemC">
                    <a href="#" class="btnCarrito">Afegir al carret</a>
                    <a href="#"><img class="favs" src="{{ asset('img/icons/corazon.png') }}" alt="icono favoritos"></a>
                </div>
            </div>
            <div class="item">
                <img class="itemImage" src="{{ asset('img/novedades/n2.jpg') }}" alt="pendiente negro">
                <p>17,50€</p>
                <div class="itemC">
                    <a href="#" class="btnCarrito">Afegir al carret</a>
                    <a href="#"><img class="favs" src="{{ asset('img/icons/corazon.png') }}" alt="icono favoritos"></a>
                </div>
            </div>
            <div class="item">
                <img class="itemImage" src="{{ asset('img/novedades/n3.jpg') }}" alt="pendiente naranjaBlanco">
                <p>17,50€</p>
                <div class="itemC">
                    <a href="#" class="btnCarrito">Afegir al carret</a>
                    <a href="#"><img class="favs" src="{{ asset('img/icons/corazon.png') }}" alt="icono favoritos"></a>
                </div>
            </div>
            <div class="item">
                <img class="itemImage" src="{{ asset('img/novedades/n4.jpg') }}" alt="pendiente naranja">
                <p>17,50€</p>
                <div class="itemC">
                    <a href="#" class="btnCarrito">Afegir al carret</a>
                    <a href="#"><img class="favs" src="{{ asset('img/icons/corazon.png') }}" alt="icono favoritos"></a>
                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <h4>SOBRE JOIES CRUSH</h4>
                <p>Coleccions</p>
                <p>Catàleg d’arrecades</p>
                <p>Galería d’estils</p>
                <p>Sobre nosaltres</p>
                <p>Contacte</p>
            </div>
            <div>
                <h4>LEGAL</h4>
                <p>Condicions generals</p>
                <p>Pol·lítica de privacitat</p>
                <p>Pol·lítica de cookies</p>
            </div>
            <div>
                <h4>AJUDA</h4>
                <p>Métodes de pagament</p>
                <p>Termes de servei</p>
                <p>Devolucions</p>
            </div>
            <div>
                <div class="contactos">
                    <p>joiescrush@gmail.com</p>
                    <p>+34 000 000 000</p>
                    <p>C/ la vida es dura 12</p>
                </div>
                <div>
                    <i class="fa fa-instagram redes"></i>
                    <i class="fa fa-youtube-play redes"></i>
                    <i class="fa fa-whatsapp redes"></i>
                    <i class="fa fa-google redes"></i>
                    {{-- <img src="" alt="instagram">
                    <img src="" alt="youtube">
                    <img src="" alt="whatsapp">
                    <img src="" alt="gmail"> --}}
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
