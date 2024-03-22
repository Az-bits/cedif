@extends('frontend.app')
@section('content')
    @php
        $institucion = $data['institucion'];
    @endphp
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Acerca de nosotros</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        Sobre Nosotros
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->
    <!-- ==========About Section Starts Here========== -->
    <section class="about-section pos-rel padding-bottom padding-top oh">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css" />
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css" />
        </div>
        <div class="about-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="rtl d-none d-lg-block pr-4">
                            <img src="assets/images/about/about03.png" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header left-style mb-olpo">
                                <span class="cate">Acerde de nuestro centro</span>
                                <h3 class="title">
                                    Atención Especial Para Cada Niño
                                </h3>
                                <p>
                                    Nuestro equipo está compuesto por profesionales apasionados y dedicados que están aquí
                                    para apoyar y nutrir el potencial único de cada niño. Nos comprometemos a proporcionar
                                    una atención personalizada que aborde las necesidades individuales de cada niño,
                                    asegurando así su bienestar y felicidad.
                                </p>
                            </div>
                            <div class="faq-wrapper mb--10">
                                <div class="faq-item active open">
                                    <div class="faq-title">
                                        <span class="right-icon"></span>
                                        <h5 class="title">
                                            Misión
                                        </h5>
                                    </div>
                                    <div class="faq-content">
                                        <p>
                                            {{ $institucion->mision }}
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-title">
                                        <span class="right-icon"></span>
                                        <h5 class="title">
                                            Visión
                                        </h5>
                                    </div>
                                    <div class="faq-content">
                                        <p>
                                            {{ $institucion->vision }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========About Section Ends Here========== -->
    <!-- ==========About Section Starts Here========== -->
    <section class="about-section section-right-shape padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-video mr-lg-4">
                        <img src="assets/images/about/about01.jpg" alt="about" />
                        <a href="https://www.youtube.com/embed/2J4Cfro6CJU" class="video-button popup"><i
                                class="flaticon-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header left-style">
                            <span class="cate mt-0">Nuestros Objetivos</span>
                            <h3 class="title">
                                Nuestros Objetivo Principal y Especificos
                            </h3>
                            <p>{!! $institucion->objetivo !!}</p>
                        </div>
                        <ul class="nulla-list">
                            <li>
                                <div class="thumb">
                                    <img src="assets/images/about/icon01.png" alt="about" />
                                </div>
                                <div class="content">
                                    Ambiente de aprendizaje
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/images/about/icon02.png" alt="about" />
                                </div>
                                <div class="content">
                                    Profesores profesionales
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/images/about/icon03.png" alt="about" />
                                </div>
                                <div class="content">
                                    Programas para todos
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/images/about/icon04.png" alt="about" />
                                </div>
                                <div class="content">
                                    Docencia Profesional
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========About Section Ends Here========== -->

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
                                <li>
                                    <a href="" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="whatsapp"><i class="fab fa-whatsapp"
                                            style="color: green;"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Teacher Section Ends Here========== -->
@endsection
