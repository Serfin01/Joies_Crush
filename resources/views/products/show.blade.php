@include('header')
    <div class="product">
        <img class="product-image" src="{{ asset($product->img_url) }}" alt="{{ $product->name }}">
        <div class="product-details">
            <h2>{{ $product->name }}</h2>
            <p class="product-price">Price: {{ $product->price }}€</p>
            <p class="product-stock">Stock: {{ $product->stock }}</p>
            <form class="product-form" action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit">Agregar al carrito</button>
            </form>
        </div>
    </div>
@include('footer')
