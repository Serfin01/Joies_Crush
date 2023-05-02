@include('header')
    {{-- <h1>Todos los productos</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}">Ver</a>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit">Agregar al carrito</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
    <div class="arrecades-container">
        @foreach($products as $product)
            <div class="arrecades">
                <div class="arrecades-image">
                    <img src="{{ asset($product->img_url) }}" alt="{{ $product->name }}">
                </div>
                <div class="arrecades-details">
                    <a href="{{ route('products.show', $product->id) }}"><h2>{{ $product->name }}</h2></a>
                    <p>Price: {{ $product->price }}€</p>
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <label for="quantity">Cantidad:</label>
                        <input class="arrecades-cantidad" type="number" name="quantity" value="1" min="1">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@include('footer')
