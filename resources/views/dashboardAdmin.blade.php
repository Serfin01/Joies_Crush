<h1>Bienvenido, Goiko Manager</h1>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>
