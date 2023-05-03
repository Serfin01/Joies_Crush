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
                        <form action="{{ route('cart.update', $cartItem->id) }}" method="POST">
                            @csrf
                            {{-- <input type="hidden" name="product_id" value="{{ $cartItem->id }}"> --}}
                            <td><input class="arrecades-cantidad" type="number" name="quantity" value="{{ $cartItem->quantity }}" min="1"></td>
                    <td>
                            <button type="submit">Editar</button>
                        </form>
                        <form action="{{ route('cart.remove', $cartItem->product->id) }}" method="POST">
                            @csrf
                            {{-- <input type="hidden" name="product_id" value="{{ $cartItem->id }}"> --}}
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@include('footer')
