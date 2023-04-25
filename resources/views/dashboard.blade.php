@include('header')
<h1>Bienvenido, {{ $name }}</h1>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>
@include('footer')

