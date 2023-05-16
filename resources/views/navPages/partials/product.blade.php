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
