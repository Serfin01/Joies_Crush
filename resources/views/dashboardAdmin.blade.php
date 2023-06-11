@include('header')
<h2>Bienvenido, Joies crush Manager</h2>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Tanca sessió</button>
</form>
<table class="userTable">
    <thead>
        <tr>
            <td>Name</td>
            <td class="border border-solid p-2">Email</td>
            <td class="border border-solid p-2">Borrar</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        @if ($user->name!="admin")
        <tr>
            <td class="border border-solid p-2">{{$user->name}}</td>
            <td class="border border-solid p-2">{{$user->email}}</td>
            <td class="border border-solid p-2">
                <form method="POST" action="{{ route('dashboard.destroy',$user->id) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" >
                        {{__('Delete')}}
                    </button>
                </form>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@include('footer')
