@extends('frontend.app')
@section('content')
    <style>
        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        .maquina {
            overflow: hidden;
            white-space: nowrap;
            border-right: 1px solid #fff;
            animation: typing 3s steps(50) infinite;
        }
    </style>

    <style>
        /* position dots in carousel */
        .carousel {
            background: #EEE;
        }

        .carousel-cell {
            width: 100%;
            /* height: 200px; */
            margin-right: 10px;
            /* background: #8C8; */
            border-radius: 5px;
            /* counter-increment: gallery-cell; */
        }

        /* cell number */
        .carousel-cell:before {
            display: block;
            text-align: center;
            /* content: counter(gallery-cell); */
            line-height: 200px;
            font-size: 80px;
            color: white;
        }

        /* position dots in gallery */
        .flickity-page-dots {
            bottom: 0px;
        }

        /* white circles */
        .flickity-page-dots .dot {
            width: 12px;
            height: 12px;
            opacity: 1;
            background: transparent;
            border: 2px solid white;
        }

        /* fill-in selected dot */
        .flickity-page-dots .dot.is-selected {
            background: white;
        }
    </style>


    {{-- <section class="banner-section bg_img style-2 oh" data-background="assets/images/banner/banner02.jpg">
        <section class="banner-section bg_img style-2 oh" data-background="{{ asset('images/jw-img-5.jpg') }}">


        <div class="top-shape-content d-none d-lg-block" style='right: calc(50% - 780px)'>
            <img src="assets/images/banner/banner04.png" alt="banner">
        </div>
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="banner-content style-2 cl-white">
                    <h3 class="cate">Nuestra centro de desarrollo es la mejor</h3>
                    <h1 class="title maquina">Para tus hijos</h1>
                    <p>prestara un servicio multidisciplinario, integral, con calidad y calidez a las niñas(os).</p>
                    <a href="{{ route('contacto') }}" class="custom-button"><span>
                            Empezar ahora</span></a>
                </div>
                <div class="banner-thumb d-none d-lg-block">
                    <img src="assets/images/banner/banner03.png" alt="banner">
                </div>
            </div>
        </div>
       
    </section> --}}

    <section class="banner-section style-slide">
        <div class="banner-slider">
            <div class="banner-item bg_img" data-background="assets/images/banner/slider/01.jpg">
                <div class="banner-item-inner">
                    <div class="container">
                        <div class="banner-item-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner-item-content">
                                        <h1>
                                            Mejor Centro de Cuidado para Niños
                                        </h1>
                                        <p>
                                            Para prevenir la deserción estudiantil, de madres y padres universitarios con
                                            hijos de 1 a 5 años.
                                        </p>
                                        <a href="{{ route('contacto') }}" class="custom-button"><span>Contactanos</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="banner-item bg_img" data-background="assets/images/banner/slider/02.jpg">
                <div class="banner-item-inner">
                    <div class="container">
                        <div class="banner-item-wrapper">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="banner-item-content text-center">
                                        <h1>Mejor Centro de Cuidado Infantil</h1>
                                        <p>
                                            Preescolar para el proceso de solicitud y matrícula para escuelas públicas y
                                            privadas en la ciudad de alo abu mal kita kores vai
                                        </p>
                                        <a href="{{ route('contacto') }}" class="custom-button"><span>Contactanos</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-item bg_img" data-background="assets/images/banner/slider/03.jpg">
                <div class="banner-item-inner">
                    <div class="container">
                        <div class="banner-item-wrapper">
                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    <div class="banner-item-content">
                                        <h1>Kitton - Centro de Cuidado Infantil</h1>
                                        <p>
                                            Preescolar para el proceso de solicitud y matrícula para escuelas públicas y
                                            privadas en la ciudad de alo abu mal kita kores vai
                                        </p>
                                        <a href="{{ route('contacto') }}" class="custom-button"><span>Contactanos</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    <!-- ==========Banner Section Ends Here========== -->

    <!-- ==========About Section Starts Here========== -->
    @php
        $icons = ['01', '02', '03', '04'];
    @endphp
    <section class="about-section pos-rel padding-bottom padding-top">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header">
                        <span class="cate">Bienvenidos a nuestra centro infantil Jisk'a wawa</span>
                        <h3 class="title">La Mejor Educación En Nuestro Centro Infantil</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none -mx-10">
                @foreach ($data['salas'] as $item)
                    <div class="col-sm-7 col-md-6 col-lg-5 col-xl-3">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <img src="assets/images/feature/{{ $icons[rand(0, 3)] }}.png" class="ml--8" alt="feature">
                            </div>
                            <div class="feature-content">
                                <h5 class="title">{{ $item->nombre }}</h5>
                                <span class="cate">{{ $item->categoria }}</span>
                                <p>{{ $item->subtitulo }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="padding-top about-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-thumb">
                            <img src="assets/images/about/about02.png" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header left-style mb-olpo">
                                <span class="cate">Acerca de nuestro centro</span>
                                <h3 class="title">Atención Especial Para Cada Niño</h3>
                                <p>Brindamos servicios integrales de atención cuidado, seguridad, educación Inicial en
                                    Familia
                                    Comunitaria, estimulación y orientación parental, con un enfoque multidisciplinario,
                                    oportuno, solidario, con calidad y calidez; sin fines de lucro en beneficio de hijas e
                                    hijos menores de cinco años de estudiantes universitarios, docentes y administrativos de
                                    la Universidad Publica de El Alto (UPEA).</p>
                            </div>
                            <ul class="about-list">
                                <li>
                                    <i class="flaticon-vegan"></i><span>Baños</span> ordenados y limpios
                                </li>
                                <li>
                                    <i class="flaticon-vegan"></i><span>Comedor</span> con alimentos saludables.
                                </li>
                                <li>
                                    <i class="flaticon-vegan"></i><span>Salones de clases</span> ambientados y confortantes.
                                </li>
                                <li>
                                    <i class="flaticon-vegan"></i><span>Zona de juegos</span> Amplia
                                </li>
                            </ul>
                            <blockquote class="about-quote">
                                <div class="thumb">
                                    <img src="assets/images/about/quote.png" alt="about">
                                </div>
                                <div class="content">
                                    <span class="quote">“Un niño puede hacer preguntas que un hombre sabio no puede
                                        responder.”</span> <span class="name">Jostein Gaarder</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========About Section Ends Here========== -->

    <!-- ==========Counter Section Starts Here========== -->
    <div class="counter-section padding-top padding-bottom bg_img" data-background="assets/images/counter/counter-bg.jpg">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="counter-item">
                        <div class="counter-thumb">
                            <img class="rounded-circle" src="{{ asset('images/gifs/video.gif') }}" alt="counter" />
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h2 class="title odometer" data-odometer-final="{{ $data['contadores']['videos'] }}">
                                    0
                                </h2>
                            </div>
                            <span class="cate">Videos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="counter-item">
                        <div class="counter-thumb">
                            <img src="{{ asset('images/gifs/file.gif') }}" alt="counter" />
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h2 class="title odometer" data-odometer-final="{{ $data['contadores']['publicaciones'] }}">
                                    0
                                </h2>
                                <h2 class="title"></h2>
                            </div>
                            <span class="cate">Publicaciones</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="counter-item">
                        <div class="counter-thumb">
                            <img src="{{ asset('images/gifs/image.gif') }}" alt="counter" />
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h2 class="title odometer" data-odometer-final="{{ $data['contadores']['galeria'] }}">
                                    0
                                </h2>
                                <h2 class="title"></h2>
                            </div>
                            <span class="cate">Fotografias</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Counter Section Ends Here========== -->

    <!-- ==========Class Section Starts Here========== -->
    {{-- section class="class-section padding-top padding-bottom pos-rel">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header">
                        <span class="cate">Nuestras Clases Escolares</span>
                        <h3 class="title">Clases Escolares Más Populares</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-4 col-md-6">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="#"><img src="assets/images/class/class04.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="#">Gestión de arte y color</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/images/class/teacher02.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="#">Martin Soliz</a></h6>
                                        <a href="#" class="info">Ver perfil</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">Gratuito</h6>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Tamaño de la clase</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">02:30 -18:00</h6>
                                    <span class="info">Hora de clase</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">03 - 05</h6>
                                    <span class="info">Años</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more">
                <a href="#" class="custom-button"><span>Empieza ahora</span></a>
            </div>
        </div>
    </section>< --}}
    <!-- ==========Class Section Ends Here========== -->


    <!-- ==========Call In Action Section Starts Here========== -->
    <section class="call-in-action padding-top padding-bottom theme-overlay bg_img"
        data-background="assets/images/bg/call-bg.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-8">
                    <div class="section-header left-style cl-white mb-olpo mb-md-0">
                        <h3 class="mb-3">Es el momento perfecto para inscribirse</h3>
                        <h3 class="title">¿Cómo Inscribir A Su Hijo En Una Clase?</h3>
                    </div>
                </div>
                <div class="col-md-4 text-md-right">
                    <a href="{{ route('contacto') }}" class="custom-button theme-one"><span>Empieza ahora</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Call In Action Section Ends Here========== -->


    <!-- ==========Teacher Section Starts Here========== -->
    <section class="teacher-section padding-top padding-bottom pos-rel">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header">
                        <span class="cate">Conozca A Nuestras Autoridades</span>
                        <h3 class="title">Nuestras autoridades que nos ayudan a llevar adelante nuestro centro</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-3 col-sm-6">
                    <div class="teacher-item-2">
                        <div class="teacher-thumb">
                            <div class="thumb">
                                <a href="#">
                                    <img src="https://e7.pngegg.com/pngimages/43/926/png-clipart-computer-icons-avatar-user-avatar-heroes-woman.png"
                                        alt="teacher">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Lic. Margot Patsi</a></h5>
                                <span>Directora</span>
                            </div>
                            {{-- <div class="thumb">
                                <a href="teacher-single.html">
                                    <img src="assets/images/teacher/teacher01.jpg" alt="teacher">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="teacher-single.html">Ricardo Mendoza</a></h5>
                                <span>Maestro de Música o Arte</span>
                            </div> --}}
                        </div>
                        <div class="teacher-content">
                            <ul class="teacher-social justify-content-center">
                                {{-- <li>
                                    <a href="" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="whatsapp"><i class="fab fa-whatsapp"
                                            style="color: green;"></i></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Teacher Section Ends Here========== -->


    <!-- ==========Call-In-Section Starts Here========== -->
    {{-- <section class="call-in-action call-overlay bg_img padding-bottom padding-top"
        data-background="assets/images/bg/call-bg.jpg">
        <div class="container">
            <div class="call-wrapper">
                <div class="section-header mb-olpo">
                    <h3 class="title">Vuelvete Un Maestro</h3>
                    <p>Si desea unirse a nosotros como formador para compartir su conocimiento y experiencia profesional, le
                        daremos la bienvenida como nuestra familia de formadores.</p>
                </div>
                <div class="text-center">
                    <a href="#" class="custom-button"><span>EMPIEZA AHORA</span></a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==========Call-In-Section Ends Here========== -->


    <!-- ==========Blog Section Starts Here========== -->
    {{-- <section class="blog-section padding-top padding-bottom pos-rel">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header">
                        <span class="cate">our blog post</span>
                        <h3 class="title">Our most popular posts</h3>
                    </div>
                </div>
            </div>
            <div class="row mb-30-none justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="assets/images/blog/blog01.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.html">How Kids make sense of Life
                                        Experiences</a>
                                </h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.html" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="assets/images/blog/blog02.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.html">Why do aerobicay fit children have
                                        better?</a></h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.html" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="assets/images/blog/blog03.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.html">Why do aerobically have better Math
                                        Skills</a></h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.html" class="read">Read More</a>
                                <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                        class="comment-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==========Blog Section Ends Here========== -->
    <!-- ==========Map Section Starts Here========== -->
    <section class="teacher-section padding-bottom pos-rel" id="ubicacion">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-3 col-sm-6">
                    <h3 style="min-width: 20rem">Nuestra Ubicación</h3>
                </div>
            </div>
        </div>
    </section>
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
        $('.carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            autoPlay: true
        });
    </script>
@endsection
