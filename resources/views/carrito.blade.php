@include('header')
    <h2 class="cartTitle">Carrito de {{ $user->name }}</h2>
    <table class="cartTable">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user->cartItems as $cartItem)
                <tr>
                    <td><img src="{{ asset($cartItem->product->img_url) }}" alt="{{ $cartItem->name }}"></td>
                    <td>{{ $cartItem->product->name }}</td>
                    <td>{{ $cartItem->product->price }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                    <td>
                        <form action="{{ route('cart.update', $cartItem->product->id) }}" method="POST">
                            @csrf
                            <button type="submit">Editar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@include('footer')
