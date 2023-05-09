@include('header')
    <h2 class="cartTitle">Carrito de {{ $user->name }}</h2>
    <table class="cartTable">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user->cartItems as $cartItem)
                <tr>
                    <td><img src="{{ asset($cartItem->product->img_url) }}" alt="{{ $cartItem->name }}"></td>
                    <td>{{ $cartItem->product->name }}</td>
                    <td>{{ $cartItem->product->price }}€</td>
                        <form action="{{ route('cart.update', $cartItem->id) }}" method="POST">
                            @csrf
                            {{-- <input type="hidden" name="product_id" value="{{ $cartItem->id }}"> --}}
                    <td><input class="arrecades-cantidad" type="number" name="quantity" value="{{ $cartItem->quantity }}" min="1"></td>
                    <td>{{ $cartItem->product->price * $cartItem->quantity }}€</td>
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
    <table class="cartTotalsTable">
        <tbody>
            @php
                $subtotal = 0;
                foreach ($user->cartItems as $cartItem) {
                    $subtotal += $cartItem->quantity * $cartItem->product->price;
                }
                $shipping = ($subtotal >= 35) ? 0 : 15;
                $total = $subtotal + $shipping;
            @endphp
            <tr>
                <td>Subtotal</td>
                <td>{{ $subtotal }}€</td>
            </tr>
            <tr>
                <td>Gastos de envío</td>
                <td>{{ $shipping }}€</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>{{ $total }}€</td>
            </tr>
            <tr>
                <td colspan="2" class="pay">
                    <form action="{{route('checkout.pay')}}" method="GET">
                        @csrf
                        <button type="submit" action="{{route('checkout.pay')}}">Pagar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
       
    
    {{-- <form action="{{ route('checkout') }}" method="POST">
        @csrf
        <button type="submit">Ir a pagar</button>
    </form> --}}
@include('footer')
