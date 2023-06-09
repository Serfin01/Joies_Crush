@include('header')
    <div class="loginForm">
        @if ($errors->any())
            <script>
                Swal.fire({
                    title: 'Error!',
                    html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
            </script>
        @endif
        <h2>EL MEU COMPTE</h2>
        <div class="regisForm">
            <div>
                <h3>INICIAR SESSIÓ</h3>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <input name="email" type="email" placeholder="Email">
                    <input name="password" type="password" placeholder="Contrasenya">
                    <div class="check">
                        <input type="checkbox" name="remember" class="checkbox">
                        <p>Recorda’m</p>
                        <a href="#">Has oblidat la teva contrasenya?</a>
                    </div>
                    <button class="loginbtn">INICIAR SESSIÓ</button>
                    <button class="googlebtn" type="button" onclick="window.location.href = '{{ route('login.google') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16"> <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/> </svg>
                        <a href="{{ route('login.google') }}">Iniciar sessió amb Google</a></button>
                </form>
            </div>
            <div>
                <h3>CREAR COMPTE NOU</h3>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Nom">
                    <input type="text" name="last_name" placeholder="Cognoms">
                    <input type="email" name="email" placeholder="Correu electrònic">
                    <input type="password" name="password" placeholder="Contrasenya">
                    <input type="password" name="password_confirmation" placeholder="Confirmar contrasenya">
                    <div class="check">
                        <input type="checkbox" name="checkbox" class="checkbox">
                        <p>Accepto la politica de privacitat</p>
                    </div>
                    <p>JOIES CRUSH S.L., tracta la informació que ens facilita amb la finalitat de possibilitar la prestació adequada del servei concertat i el desenvolupament d'accions comercials. Podeu exercir els vostres drets en qualsevol moment a través de la següent adreça electrònica: joiescrush@gmail.com. Consulteu la informació addicional i detallada a la nostra política de privacitat.</p>
                    <button type="submit" class="loginbtn">REGISTRAT</button>
                </form>
            </div>
        </div>
    </div>
@include('footer')
