@include('header')
    <div class="grid">
        @foreach($imagenes as $imagen)
            <div class="grid-item">
                <img src="{{ $imagen }}" alt="Imagen">
            </div>
        @endforeach
    </div>
@include('footer')
