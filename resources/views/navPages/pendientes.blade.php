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
    <div class="tags">
        <div>
            <label for="color">Color:</label>
            <select name="color">
                <option value="no">no</option>
                <option value="vermell">vermell</option>
                <option value="vermell ataronjat">vermell ataronjat</option>
                <option value="taronja">taronja</option>
                <option value="groc">groc</option>
                <option value="verd llima">verd llima</option>
                <option value="verd">verd</option>
                <option value="cian">cian</option>
                <option value="blau clar">blau clar</option>
                <option value="blau">blau</option>
                <option value="blau fosc">blau fosc</option>
                <option value="rosa">rosa</option>
                <option value="fúcsia">fúcsia</option>
                <option value="blanc">blanc</option>
                <option value="negre">negre</option>
                <option value="gris">gris</option>
                <option value="marró">marró</option>
            </select>
        </div>
        <div>
            <label for="forma">Forma:</label>
            <select name="forma">
                <option value="no">no</option>
                <option value="imant">imant</option>
                <option value="cercle">cercle</option>
                <option value="quadrat">quadrat</option>
                <option value="rombe">rombe</option>
                <option value="rectangle">rectangle</option>
                <option value="cor">cor</option>
                <option value="gota">gota</option>
                <option value="arbre">arbre</option>
                <option value="flor">flor</option>
                <option value="rosa">rosa</option>
            </select>
        </div>
        <div>
            <label for="tancat">Tancat:</label>
            <select name="tancat">
                <option value="no">no</option>
                <option value="ganxo">ganxo</option>
                <option value="botó">botó</option>
            </select>
        </div>
        <div>
            <label for="material">Material:</label>
            <select name="material">
                <option value="no">no</option>
                <option value="acer hipoalergènic">acer hipoalergènic</option>
                <option value="metall">metall</option>
            </select>
        </div>
        <div>
            <label for="tamany">Tamany:</label>
            <select name="tamany">
                <option value="no">no</option>
                <option value="gran">gran</option>
                <option value="mitjà">mitjà</option>
                <option value="petit">petit</option>
            </select>
        </div>
        <div>
            <label for="textura">Textura:</label>
            <select name="textura">
                <option value="no">no</option>
                <option value="llisa">llisa</option>
                <option value="barres">barres</option>
                <option value="rugosa">rugosa</option>
            </select>  
        </div>
        <button>Cerca</button>
    </div>
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
