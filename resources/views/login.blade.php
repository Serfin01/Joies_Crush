@include('header')
    <div class="loginForm">
        <h2>EL MEU COMPTE</h2>
        <div>
            <h3>INICIAR SESSIÓ</h3>
            <form action="">
                <input type="text">
                <input type="text">
                <input type="checkbox"><p>Recorda’m</p>
                <a href="#">Has oblidat la teva contrasenya?</a>
                <button>INICIAR SESSIÓ</button>
                <button>Iniciar sessió amb Facebook</button>
                <button>Iniciar sessió amb Google</button>
            </form>
        </div>
        <div>
            <h3>CREAR COMPTE NOU</h3>
            <form action="">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="checkbox"><p>Accepto la politica de privacitat</p>
                <p>JOIES CRUSH S.L., tracta la informació que ens facilita amb la finalitat de possibilitar la prestació adequada del servei concertat i el desenvolupament d'accions comercials. Podeu exercir els vostres drets en qualsevol moment a través de la següent adreça electrònica: joiescrush@gmail.com. Consulteu la informació addicional i detallada a la nostra política de privacitat.</p>
                <button>REGISTRAT</button>
            </form>
        </div>
    </div>
    @include('footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
