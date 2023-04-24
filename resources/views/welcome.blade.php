@include('header')
    <div class="heroSection">
        <div class="bxslider">
            <div><div class="slideText" id="carruselText1"><h4>AMOR ÚNIC</h4><p>Dissenyem les teves arracades artesanalment i amb molta cura. Cada disseny és únic, així com cada Crush que t’agrada.</p></div><img id="slide1" src="{{ asset('img/carrusel/carrusel1.JPG') }}" alt="pendiente morado"></div>
            <div><div class="slideText" id="carruselText2"><h4>COLOR <i>CRUSH</i></h4><p>Busca el color de la teva personalitat.<br>La que et faci única i et defineixi.</p></div><img id="slide2" src="{{ asset('img/carrusel/carrusel2.png') }}" alt="pendiente morado"></div>
            <div><div class="slideText" id="carruselText3"><h4>AMB CURA I AMOR</h4><p>Dissenyem les teves arrecades artesanament i amb molta cura.<br>Perquè et mereixes bellesa, et mereixes una bona Crush</p></div><img id="slide3" src="{{ asset('img/carrusel/carrusel3.jpg') }}" alt="mujer con pendiente"></div>
            <div><div class="slideText" id="carruselText4"><h4><i>PERFECT DATE</i></h4><p>Perfecta per qualsevol ocasió. Tant per moments casuals i ocasions especials i elegants.</p></div><img id="slide4" src="{{ asset('img/carrusel/carrusel4.jpg') }}" alt="pendiente morado"></div>
            <div><div class="slideText" id="carruselText5"><h4>AMOR MODELABLE</h4><p>Disposem de totes les formes que vulguis i fins i tot amb la possibilitat de què siguin personalitzades.</p></div><img id="slide5" src="{{ asset('img/carrusel/carrusel5.JPG') }}" alt="pendiente rojo"></div>
        </div>
        <div class="bx-pager">
            <a data-slide-index="0" href="" class="pagerDot">•</a>
            <a data-slide-index="1" href="" class="pagerDot">•</a>
            <a data-slide-index="2" href="" class="pagerDot">•</a>
            <a data-slide-index="3" href="" class="pagerDot">•</a>
            <a data-slide-index="4" href="" class="pagerDot">•</a>
        </div>
        <div class="controles">
            <a href="#" class="prev"><img src="{{ asset('img/icons/arrowlef.svg') }}" alt="Anterior"></a>
            <a href="#" class="next"><img src="{{ asset('img/icons/arrowright.svg') }}" alt="Siguiente"></a>
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
    </div>
    <div class="colaboradores">
        <div class="colabTitle">
            <h2>EDITORIALS COL·LABORADORES</h2>
        </div>
        <div class="logosColab">
            <img src="{{ asset('img/icons/Falcon.png') }}" alt="logo Falcon">
            <img src="{{ asset('img/icons/ArmandsCouture.png') }}" alt="logo ArmandsCouture">
            <img src="{{ asset('img/icons/Gmaro.png') }}" alt="logo Gmaro">
        </div>
    </div>
@include('footer')
