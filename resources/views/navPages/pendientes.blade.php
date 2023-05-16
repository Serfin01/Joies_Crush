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
            @include('navPages.partials.product')
        @endforeach
    </div>
@include('footer')
