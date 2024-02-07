@extends('frontend.app')
@section('content')
    <!-- ==========Banner Section Starts Here========== -->
    <section class="banner-section bg_img style-2 oh" data-background="assets/images/banner/banner02.jpg">
        {{-- <section class="banner-section bg_img style-2 oh" data-background="{{ asset('images/jw-img-5.jpg') }}"> --}}
        <div class="top-shape-content d-none d-lg-block">
            {{-- <img src="assets/images/banner/banner04.png" alt="banner"> --}}
        </div>
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="banner-content style-2 cl-white w-100">
                    <h3 class="cate">Nuestra centro de desarrollo es la mejor</h3>
                    <h1 class="title">Para tus hijos</h1>
                    <p>prestara un servicio multidisciplinario, integral, con calidad y calidez a las niñas(os).</p>
                    <a href="{{ route('contacto') }}" class="custom-button"><span>
                            Empezar ahora</span></a>
                </div>
                <div class="banner-thumb d-none d-lg-block">
                    <img src="assets/images/banner/banner03.png" alt="banner">
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->

    <!-- ==========Banner Section Starts Here========== -->
    {{-- <section class="banner-section style-slide">
        <div class="banner-slider">
            <div class="banner-item bg_img" data-background="assets/images/banner/slider/01.jpg">
                <div class="banner-item-inner">
                    <div class="container">
                        <div class="banner-item-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner-item-content">
                                        <h1>Best Child Care Center - Kitton</h1>
                                        <p>Prescholer for the apcation testing and enrollment process for
                                            publc and private schools the city of alo abu mal kita kores vai</p>
                                        <a href="#" class="custom-button"><span>Get Started Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-item bg_img" data-background="assets/images/banner/slider/02.jpg">
                <div class="banner-item-inner">
                    <div class="container">
                        <div class="banner-item-wrapper">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="banner-item-content text-center">
                                        <h1>Best Child Care Center</h1>
                                        <p>Prescholer for the apcation testing and enrollment process for
                                            publc and private schools the city of alo abu mal kita kores vai</p>
                                        <a href="#" class="custom-button"><span>Get Started Now</span></a>
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
                                        <h1>Kitton- Child Care Center </h1>
                                        <p>Prescholer for the apcation testing and enrollment process for
                                            publc and private schools the city of alo abu mal kita kores vai</p>
                                        <a href="#" class="custom-button"><span>Get Started Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==========Banner Section Ends Here========== -->

    <!-- ==========About Section Starts Here========== -->
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
                        <h3 class="title">La Mejor Educación En Nuestro Jardín De Infantes</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none -mx-10">
                <div class="col-sm-7 col-md-6 col-lg-5 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/01.png" class="ml--8" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Club de tareas</h5>
                            <span class="cate">(1,5 – 2 años)</span>
                            <p>Espacio colaborativo donde estudiantes se reúnen para realizar sus tareas y estudiar juntos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-6 col-lg-5 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/02.png" class="ml--8" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Apoyo Escolar</h5>
                            <span class="cate">(4 – 5 años)</span>
                            <p>Es un recurso valioso que brinda asistencia adicional a los estudiantes en
                                sus estudios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-6 col-lg-5 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/03.png" class="ml--8" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Sala Parvulo</h5>
                            <span class="cate">(2 – 3 años)</span>
                            <p>Es un ambiente acogedor y estimulante, donde los niños participan en actividades lúdicas y
                                educativas adaptadas a su edad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-6 col-lg-5 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/01.png" class="ml--8" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Psicomotricidad</h5>
                            <span class="cate">(2 – 3 años)</span>
                            <p> Se refiere a la relación entre la mente y el movimiento del cuerpo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-6 col-lg-5 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/04.png" class="ml--8" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Lecto-Escritura</h5>
                            <span class="cate">(3 – 4 años)</span>
                            <p>se refiere al conjunto de habilidades que implican la capacidad de leer y escribir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-6 col-lg-5 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/04.png" class="ml--8" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Desarrollo Integral</h5>
                            <span class="cate">(3 – 4 años)</span>
                            <p>Incluye el desarrollo físico, emocional, social, cognitivo y moral. En este enfoque, se busca
                                cultivar no solo habilidades académicas, sino también habilidades sociales, emocionales y
                                físicas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-6 col-lg-5 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/02.png" class="ml--8" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Estimulación Temprana</h5>
                            <span class="cate">(4 – 5 años)</span>
                            <p>Es un conjunto de actividades y prácticas diseñadas para promover el desarrollo óptimo de los
                                niños desde el nacimiento hasta los primeros años de vida. </p>
                        </div>
                    </div>
                </div>
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
                                    <i class="flaticon-vegan"></i><span>Baño</span> ordenado y limpio
                                </li>
                                <li>
                                    <i class="flaticon-vegan"></i><span>Cantina</span> con alimentos saludables y agua.
                                </li>
                                <li>
                                    <i class="flaticon-vegan"></i><span>Sala de clase</span> con aire acondicionado
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
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="counter-item round-style">
                        <div class="counter-thumb">
                            <img src="assets/images/counter/counter4.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h2 class="title odometer" data-odometer-final="17">0</h2>
                            </div>
                            <span class="cate">Edad 01 - 03</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="counter-item round-style">
                        <div class="counter-thumb">
                            <img src="assets/images/counter/counter5.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h2 class="title odometer" data-odometer-final="12">0</h2>
                                <h2 class="title">+</h2>
                            </div>
                            <span class="cate">Edad 03 - 05</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="counter-item round-style">
                        <div class="counter-thumb">
                            <img src="assets/images/counter/counter6.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h2 class="title odometer" data-odometer-final="63">0</h2>
                                <h2 class="title">%</h2>
                            </div>
                            <span class="cate">Total Niños</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="counter-item round-style">
                        <div class="counter-thumb">
                            <img src="assets/images/counter/counter7.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h2 class="title odometer" data-odometer-final="37">0</h2>
                                <h2 class="title">%</h2>
                            </div>
                            <span class="cate">Total Niñas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Counter Section Ends Here========== -->


    <!-- ==========Class Section Starts Here========== -->
    <section class="class-section padding-top padding-bottom pos-rel">
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
                                        {{-- <a href="#" class="info">Ver perfil</a> --}}
                                    </div>
                                    {{-- <div class="thumb">
                                        <a href="teacher-single.html"><img src="assets/images/class/teacher02.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.html">Joly Smith</a></h6>
                                        <a href="teacher-single.html" class="info">View Profile</a>
                                    </div> --}}
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">Gratuito</h6>
                                    {{-- <span class="info">Per Month</span> --}}
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
                <div class="col-xl-4 col-md-6">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="#"><img src="assets/images/class/class05.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="#">Música y actuación</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/images/class/teacher01.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="#">Luz Ali</a></h6>
                                        <a href="#" class="info">Ver Perfil</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">Gratuito</h6>
                                    {{-- <span class="info">Per Month</span> --}}
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Tamaño de la clase</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
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
                <div class="col-xl-4 col-md-6">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="#"><img src="assets/images/class/class06.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="#">Lecto - Escritura</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ asset('images/prof/teacher03.jpg') }}"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="#">Pablo Villaroel</a></h6>
                                        <a href="#" class="info">Ver perfil</a>
                                        {{-- <a href="teacher-single.html" class="info">Ver perfil</a> --}}
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">Gratuito</h6>
                                    {{-- <span class="info">Per Month</span> --}}
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">12 - 15</h6>
                                    <span class="info">Tamaño de la clase</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Hora de clase</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">04 - 05</h6>
                                    <span class="info">Años</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-4 col-md-6">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.html"><img src="assets/images/class/class01.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.html">Art And Color Management</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.html"><img src="assets/images/class/teacher02.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.html">Joly Smith</a></h6>
                                        <a href="teacher-single.html" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.html"><img src="assets/images/class/class02.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.html">Music And Performance</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.html"><img src="assets/images/class/teacher01.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.html">Mrs. Labonno</a></h6>
                                        <a href="teacher-single.html" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="class-item">
                        <div class="class-thumb">
                            <a href="class-single.html"><img src="assets/images/class/class03.jpg" alt="class"></a>
                        </div>
                        <div class="class-content">
                            <h5 class="title">
                                <a href="class-single.html">Religion And History</a>
                            </h5>
                            <div class="class-meta">
                                <div class="class-author">
                                    <div class="thumb">
                                        <a href="teacher-single.html"><img src="assets/images/class/teacher03.jpg"
                                                alt="class"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle"><a href="teacher-single.html">Robot Smith</a></h6>
                                        <a href="teacher-single.html" class="info">View Profile</a>
                                    </div>
                                </div>
                                <div class="cost-area">
                                    <h6 class="subtitle">$12.96</h6>
                                    <span class="info">Per Month</span>
                                </div>
                            </div>
                            <div class="schedule-area">
                                <div class="schedule-item">
                                    <h6 class="sub-title">24 - 30</h6>
                                    <span class="info">Class Size</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">09:30 -12:00</h6>
                                    <span class="info">Class Time</span>
                                </div>
                                <div class="schedule-item">
                                    <h6 class="sub-title">06 - 08</h6>
                                    <span class="info">Years Old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="load-more">
                <a href="#" class="custom-button"><span>Empieza ahora</span></a>
            </div>
        </div>
    </section>
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
                        <span class="cate">Conozca A Nuestro Personal</span>
                        <h3 class="title">Nuestros Mejores Profesores Populares</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-3 col-sm-6">
                    <div class="teacher-item-2">
                        <div class="teacher-thumb">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/images/teacher/teacher01.jpg" alt="teacher">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Ricardo Mendoza</a></h5>
                                <span>Maestro de Música o Arte</span>
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
                                <li>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="whatsapp"><i class="fab fa-whatsapp"
                                            style="color: green;"></i></a>
                                </li>
                                {{-- <li>
                                    <a href="#" class="dribble"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="vimeo"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="teacher-item-2">
                        <div class="teacher-thumb">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/images/teacher/teacher08.jpg" alt="teacher">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Luz Manriquez</a></h5>
                                <span>Maestra de Necesidades Especiales</span>
                            </div>
                        </div>
                        <div class="teacher-content">
                            <ul class="teacher-social justify-content-center">
                                <li>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="whatsapp"><i class="fab fa-whatsapp"
                                            style="color: green;"></i></a>
                                </li>
                                {{-- <li>
                                    <a href="#" class="dribble"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="vimeo"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="teacher-item-2">
                        <div class="teacher-thumb">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/images/teacher/teacher06.jpg" alt="teacher">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Carla Diaz</a></h5>
                                <span>Tecnica y tecnologia</span>
                            </div>
                        </div>
                        <div class="teacher-content">
                            <ul class="teacher-social justify-content-center">
                                <li>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="whatsapp"><i class="fab fa-whatsapp"
                                            style="color: green;"></i></a>
                                </li>
                                {{-- <li>
                                    <a href="#" class="dribble"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="vimeo"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="teacher-item-2">
                        <div class="teacher-thumb">
                            <div class="thumb">
                                {{-- <a href="#"> --}}
                                <a href="#">
                                    <img src="assets/images/teacher/teacher03.jpg" alt="teacher">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Susan Soliz</a></h5>
                                <span>Maestro de Educación Infantil</span>
                            </div>
                        </div>
                        <div class="teacher-content">
                            <ul class="teacher-social justify-content-center">
                                <li>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="whatsapp"><i class="fab fa-whatsapp"
                                            style="color: green;"></i></a>
                                </li>
                                {{-- <li>
                                    <a href="#" class="dribble"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="vimeo"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
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
    <section class="call-in-action call-overlay bg_img padding-bottom padding-top"
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
    </section>
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
    <div class="map-section pos-rel">
        <div class="maps"></div>
        {{-- <div class="contact-area padding-bottom padding-top pt-lg-0 pb-lg-0">
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
        </div> --}}
    </div>
    <!-- ==========Map Section Ends Here========== -->
@endsection
