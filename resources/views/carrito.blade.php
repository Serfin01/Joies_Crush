@include('header')
    <h2>Carrito de {{ $user->name }}</h2>
    @foreach ($user->cartItems as $cartItem)
        <p>{{ $cartItem->product->name }} - {{ $cartItem->quantity }}</p>
    @endforeach
@include('footer')
