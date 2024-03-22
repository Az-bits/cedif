@extends('frontend.app')
@section('content')
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Contactenos</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>
                        Contacto
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Contact Section Starts Here========== -->
    @if (Session::get('success'))
        <script>
            Swal.fire({
                title: "Exitoso!",
                text: "Solicitud enviada correctamente!",
                icon: "success"
            });
        </script>
    @endif

    <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="contact-form-area">
                <h4 class="title">Solicitar información</h4>
                <form action="{{ route('admin-contacto') }}" method="POST" class="contact-form" id="contact_form_submit">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Nombre" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Correo" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Celular" id="phone" name="phone">
                    </div>
                    {{-- <div class="form-group">
                        <input type="text" placeholder="Asunto" id="subject" name="subject">
                    </div> --}}
                    <div class="form-group w-100">
                        <textarea name="message" id="message" id="message" placeholder="Asunto"></textarea>
                    </div>
                    <div class="form-group w-100 text-center">
                        <button onclick="confirmarEliminacion('1')" class="custom-button"><span>Enviar
                                Solicitud</span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ==========Contact Section Ends Here========== -->
    <!-- ==========Map Section Starts Here========== -->
    <div class="map-section pos-rel">
        {{-- <iframe width="600" height="450" frameborder="0" style="border:0" 
            src="https://maps.app.goo.gl/ee2EhbxsHMXTbz8u5" allowfullscreen>
        </iframe> --}}
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1137.3903343415705!2d-68.19275061591475!3d-16.490224711822528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf246daebfb9%3A0x2a4becb95f2f7651!2sEdificio%20del%20%C3%81rea%20Sociales%20de%20la%20UPEA!5e0!3m2!1ses-419!2sbo!4v1709309676020!5m2!1ses-419!2sbo"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ==========Map Section Ends Here========== -->
    <script>
        // Obtén la referencia al elemento input por su id
        const inputNombre = document.getElementById('name');

        // Dale foco al input cuando la página se carga
        window.onload = function() {
            inputNombre.focus();
        };
    </script>
@endsection
