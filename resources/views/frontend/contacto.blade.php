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
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    @if (Session::get('error'))
        <script>
            Swal.fire({
                title: "Error!",
                text: "{{ Session::get('error') }}",
                icon: "question"
            });
        </script>
    @endif

    <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="contact-form-area" style="background: #f6f6f6;">
                <h4 class="title">Solicitar información</h4>
                @if ($errors->any())
                    <div class="alert alert-danger d-flex align-items-center lert-dismissible" role="alert">
                        <div>
                            <span>
                                <b> Error - </b> Oops! Parece que olvidaste completar algunos
                                campos:</span><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button" class="btn-close az-btn-closed" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('contacto.save') }}" method="POST" class="contact-form" id="contact_form_submit">
                    @csrf
                    <div class="col-lg-8 az-with">
                        <div class="form-group">
                            <input type="text" placeholder="Nombre" id="nombre" name="nombre" required>
                        </div>
                    </div>
                    <div class="col-lg-4 az-with">
                        <div class="form-group">
                            <input type="text" placeholder="Cedula de  Identidad" id="ci" name="ci" required>
                        </div>
                    </div>
                    <div class="col-lg-8 az-with">
                        <div class="form-group">
                            <input type="email" placeholder="Correo" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="col-lg-4 az-with">
                        <div class="form-group">
                            <input type="number" placeholder="Celular" id="celular" name="celular" required>
                        </div>
                    </div>
                    <div class="col-lg-12 az-with">
                        <div class="form-group w-100">
                            <textarea name="descripcion" id="descripcion" placeholder="Asunto" required></textarea>
                        </div>
                    </div>
                    <div class="form-group w-100 text-center">
                        <button class="custom-button"><span>Enviar
                                Solicitud <i class="fab fa-telegram-plane"></i></span></button>
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
        <iframe src="{{ $data['institucion']->ubicacion }}" width="100%" height="450" style="border:0;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ==========Map Section Ends Here========== -->

    <script>
        // Obtén la referencia al elemento input por su id
        const inputNombre = document.getElementById('nombre');

        // Dale foco al input cuando la página se carga
        window.onload = function() {
            inputNombre.focus();
        };
    </script>
@endsection
