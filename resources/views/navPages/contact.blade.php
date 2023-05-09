@include('header')
    <div class="contactUs">

        <form class="animate__animated animate__fadeInUp" method="POST" action="{{ route('contact.store') }}">

            @csrf
            <h2>Contacta amb nosaltres</h2>
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required class="animate__animated animate__fadeInUp">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required class="animate__animated animate__fadeInUp">
            <label for="subject">Asunto:</label>
            <input type="text" id="subject" name="subject" required class="animate__animated animate__fadeInUp">
            <label for="message">Missatge:</label>
            <textarea id="message" name="message" required class="animate__animated animate__fadeInUp"></textarea>
            <button type="submit" class="animate__animated animate__fadeInUp">Envia</button>
        </form>
    </div>
@include('footer')
