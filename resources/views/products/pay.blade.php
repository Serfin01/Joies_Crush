@include('header')
<div class="payContainer">
    <h2>Pago</h1>
    <form action="{{route('checkout',$user->id)}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nom complet</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correu electrónic</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Adreça d'enviament</label>
            <textarea id="address" name="address" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="card-element">Targeta de crèdit o dèbit</label>
            <div id="card-element">
                <label for="card-element">Numero</label>
                <input type="num" id="num" name="Numero" class="form-control" required>
                <label for="card-element">Data de caducitat</label>
                <input type="num" id="date" name="Caducitat" class="form-control" required>
                <label for="card-element">CV</label>
                <input type="num" id="cv" name="CV" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn-primary" id="btnPay">Pagar</button>
    </form>
</div>
@include('footer')