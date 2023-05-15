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
    <form action="{{ route('products.index') }}" method="get" class="tags">
        <div>
            <label for="color">{{ __('Color:') }}</label>
            <select name="color">
                <option value="no">no</option>
                @foreach($tags_color as $tag)
                    <option value="{{ $tag->name }}" {{ (($searchtags['color'] ?? "") == $tag->name) ? "selected" : "" }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="shape">{{ __('Forma:') }}</label>
            <select name="shape">
                <option value="no">no</option>
                @foreach($tags_shape as $tag)
                    <option value="{{ $tag->name }}" {{ (($searchtags['shape'] ?? "") == $tag->name) ? "selected" : "" }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="lock">{{ __('Tancat:') }}</label>
            <select name="lock">
                <option value="no">no</option>
                @foreach($tags_lock as $tag)
                    <option value="{{ $tag->name }}" {{ (($searchtags['lock'] ?? "") == $tag->name) ? "selected" : "" }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="material">{{ __('Material:') }}</label>
            <select name="material">
                <option value="no">no</option>
                @foreach($tags_material as $tag)
                    <option value="{{ $tag->name }}" {{ (($searchtags['material'] ?? "") == $tag->name) ? "selected" : "" }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="size">{{ __('Mida:') }}</label>
            <select name="size">
                <option value="no">no</option>
                @foreach($tags_size as $tag)
                    <option value="{{ $tag->name }}" {{ (($searchtags['size'] ?? "") == $tag->name) ? "selected" : "" }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="texture">{{ __('Textura:') }}</label>
            <select name="texture">
                <option value="no">no</option>
                @foreach($tags_texture as $tag)
                    <option value="{{ $tag->name }}" {{ (($searchtags['texture'] ?? "") == $tag->name) ? "selected" : "" }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <button>{{ __('Cerca') }}</button>
    </form>
    <div class="arrecades-container">
        @foreach($products as $product)
            <div class="arrecades">
                <div class="arrecades-image">
                    <img src="{{ asset($product->img_url) }}" alt="{{ $product->name }}">
                </div>
                <div class="arrecades-details">
                    <a href="{{ route('products.show', $product->id) }}"><h2>{{ $product->name }}</h2></a>
                    <p>{{ __('Preu:') }} {{ $product->price }}€</p>
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <label for="quantity">{{ __('Quantitat:') }}</label>
                        <input class="arrecades-cantidad" type="number" name="quantity" value="1" min="1">
                        @php($favd = (null !== Auth::user()) && ($product->usersFavourites()->where('user_id',Auth::user()->id)->first() !== null))
                        <div id="favDiv">
                            <button type="submit">{{ __('Afegir al carret') }}</button>
                            <img class="iconos fav" src="{{ asset($favd ? 'img/icons/fullheart.svg' : 'img/icons/heart.svg') }}" alt="icono favoritos"
                            data-favd="{{ $favd ? "true" : "false" }}"
                            data-product_id="{{ $product->id }}">
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@include('footer')
