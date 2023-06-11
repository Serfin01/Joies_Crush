@include('header')
    @if($products->isEmpty())
        <script>
            Swal.fire({
                icon: 'info',
                title: 'No hi ha productes favorits',
                showConfirmButton: false,
                html: `
                    <p>Visita el catàleg d'arrecades per veure contingut</p>
                    <button onclick="goBack()" class="swal2-confirm swal2-styled" style="margin-top: 10px; width: 120px;">Tornar enrere</button>
                `
            });
    
            function goBack() {
                window.history.back();
            }
        </script>
    @else
    <div class="arrecades-container">
        @foreach($products as $product)
            @include('navPages.partials.product')
        @endforeach
    </div>
    @endif
@include('footer')
