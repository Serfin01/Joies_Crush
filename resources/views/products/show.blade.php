@include('header')
    <div class="product">
        <img class="product-image" src="{{ asset($product->img_url) }}" alt="{{ $product->name }}">
        <div class="product-details">
            <h2>{{ $product->name }}</h2>
            <p class="product-price">Price: {{ $product->price }}€</p>
            <p class="product-price">Description: {{ $product->description }}</p>
            <p class="product-stock">Stock: {{ $product->stock }}</p>
            <form class="product-form" action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                {{-- <label for="quantity">Cantidad:</label>
                <input type="number" name="quantity" id="quantity" value="1" min="1"> --}}
                <div class="quantity">
                    <label for="quantity">Cantidad:</label>
                    <input type="number" name="quantity" id="quantity" value="1" min="1" readonly>
                    <button type="button" id="increment">+</button>
                    <button type="button" id="decrement">-</button>
                    <img class="iconos fav" src="{{ asset('img/icons/heart.svg') }}" alt="icono favoritos">
                </div>
                <button type="submit">Agregar al carrito</button>
            </form>
        </div>
    </div>
@include('footer')
