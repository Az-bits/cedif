@extends('frontend.app')
@section('content')
    @php
    @endphp
    <section class="banner-section style-slide">
        <div class="banner-slider">
            <div class="banner-item bg_img" data-background="assets/images/banner/slider/05.gif">
                <div class="banner-item-inner">
                    <div class="container">
                        <div class="banner-item-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner-item-content">
                                        <div class="az-contenedor">
                                            <style>
                                                h1.maquina-2 {
                                                    /* font-family: monospace; */
                                                    overflow: hidden;
                                                    white-space: nowrap;
                                                    width: 0;
                                                    animation: maquina-escribir 3.5s linear infinite;
                                                }

                                                h1.maquina-2 .linea {
                                                    display: inline-block;
                                                    width: 0;
                                                    animation: linea-escribir 3.5s linear infinite;

                                                }

                                                @keyframes maquina-escribir {
                                                    from {
                                                        width: 0;
                                                    }

                                                    to {
                                                        width: 100%;
                                                    }
                                                }

                                                @keyframes linea-escribir {
                                                    from {
                                                        width: 0;
                                                    }

                                                    to {
                                                        width: 100%;
                                                    }

                                                    0% {
                                                        opacity: 0;
                                                    }

                                                    50% {
                                                        opacity: 50%;
                                                    }

                                                    50% {
                                                        opacity: 100%;
                                                    }
                                                }
                                            </style>
                                            <h1 class="maquina-2">
                                                <span class="linea">Centro de </span><br>
                                                <span class="linea">Desarrollo</span><br>
                                                <span class="linea">Infantil</span>
                                            </h1>

                                        </div>
                                        <p>
                                            Por los niños y para los niños.
                                        </p>
                                        <a href="{{ route('contacto') }}" class="custom-button"> <span><i
                                                    class="fab fa-telegram-plane"></i> Contactanos</span></a>
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
                        <h3 class="title">La mejor educación en nuestro centro de infantil</h3>
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
                                <h3 class="title">Atención especial para cada niño</h3>
                                <p>Brindamos servicios integrales de atención cuidado, seguridad, educación Inicial en
                                    Familia
                                    Comunitaria, estimulación y orientación parental, con un enfoque multidisciplinario,
                                    oportuno, solidario, con calidad y calidez; sin fines de lucro en beneficio de hijas e
                                    hijos menores de cinco años de estudiantes universitarios, docentes y administrativos de
                                    la Universidad Publica de El Alto (UPEA).</p>
                            </div>
                            <ul class="about-list">
                                <li>
                                    <i class="flaticon-vegan"></i><span>Comedor</span> con alimentos saludables.
                                </li>
                                <li>
                                    <i class="flaticon-vegan"></i><span>Salones de clases</span> ambientados y confortantes.
                                </li>
                                <li>
                                    <i class="flaticon-vegan"></i><span>Zona de juegos</span> Amplia
                                </li>
                                <li>
                                    <i class="flaticon-vegan"></i><span>Baños</span> ordenados y limpios
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

    <!-- ==========Call In Action Section Starts Here========== -->
    <section class="call-in-action padding-top padding-bottom theme-overlay bg_img"
        data-background="assets/images/bg/call-bg.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-8">
                    <div class="section-header left-style cl-white mb-olpo mb-md-0">
                        <h3 class="mb-3">Es el momento perfecto para inscribirse</h3>
                        <h3 class="title">¿Necesita informacion sobre como inscribir a su hijo?</h3>
                    </div>
                </div>
                <div class="col-md-4 text-md-right">
                    <a href="{{ route('contacto') }}" class="custom-button theme-one"><span><i
                                class="fab fa-telegram-plane"></i> Contactenos</span></a>
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
                        <span class="cate">Conozca a nuestras autoridades</span>
                        <h3 class="title">Nuestras autoridades que nos ayudan a llevar adelante nuestro centro infantil
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                @foreach ($data['autoridades'] as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="teacher-item-2">
                            <div class="teacher-thumb">
                                <div class="thumb">
                                    <a href="javascript:void(0)">
                                        <img src="{{ $item->image }}"
                                            alt="{{ $item->nombre . ' ' . $item->paterno . ' ' . $item->materno }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a
                                            href="javascript:void(0)">{{ $item->nivel_titulo . ' ' . $item->nombre . ' ' . $item->paterno . ' ' . $item->materno }}</a>
                                    </h5>
                                    <span>{{ $item->cargo }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                    <h3 class="text-center" style="min-width: 20rem">Nuestra Ubicación</h3>
                </div>
            </div>
        </div>
    </section>
    <div class="map-section pos-rel">
        {{-- <iframe width="600" height="450" frameborder="0" style="border:0" 
            src="https://maps.app.goo.gl/ee2EhbxsHMXTbz8u5" allowfullscreen>
        </iframe> --}}
        <iframe src="{{ $data['institucion']->ubicacion }}" width="100%" height="450" style="border:0;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
