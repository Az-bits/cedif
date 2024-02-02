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
    <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="contact-form-area">
                <h4 class="title">Solicitar información</h4>
                <form class="contact-form" id="contact_form_submit">
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
                        <button class="custom-button"><span>Enviar Solicitud</span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ==========Contact Section Ends Here========== -->
    <!-- ==========Map Section Starts Here========== -->
    <div class="map-section pos-rel">
        <div class="maps"></div>
        <div class="contact-area padding-bottom padding-top pt-lg-0 pb-lg-0">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/01.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Class Sessions</h6>
                            <ul>
                                <li>Sunday - Monday</li>
                                <li>08:00 am – 11:00 am (Fri Closed)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/02.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">kittons Address</h6>
                            <ul>
                                <li>123 White Amphitheatre Kinway, Mountain, CA 12345, USA</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/03.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Openning Hours</h6>
                            <ul>
                                <li>Sunday - Monday</li>
                                <li>08.00 am – 05.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/04.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Phone & E-mail</h6>
                            <ul>
                                <li><a href="Tel:05210021020">+123 456 78910, 0265478</a></li>
                                <li><a href="Mailto:sfkljsdfsj@gmail.com">enroll@kittons.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
