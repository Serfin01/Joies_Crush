@include('header')
<div class="container">
    <h1>Pago</h1>

    <form action="{{ route('checkout') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nombre completo</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Dirección de envío</label>
            <textarea id="address" name="address" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="card-element">
                Tarjeta de crédito o débito
            </label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button type="submit" class="btn btn-primary">Pagar</button>
    </form>
</div>
@include('footer')