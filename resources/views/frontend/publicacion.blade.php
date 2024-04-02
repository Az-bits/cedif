@extends('frontend.app')
@section('content')
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Publicaciones</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>

                        <a href="#">Más</a>
                    </li>
                    <li>
                        Publicaciones
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->
    <!-- ==========Blog Section Starts Here========== -->
    <div class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row mb-30-none justify-content-center">
                @if (!$data['publicaciones'])
                    <h2 class="text-center text-secondary">Sin publicaciones</h2>
                @endif

                @foreach ($data['publicaciones'] as $item)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="{{ asset('detalle-informacion/' . $item->id_publicacion . '') }}"><img
                                        src="{{ $item->image }}" alt="{{ $item->titulo }}"></a>
                            </div>
                            <div class="post-content">
                                <div class="post-top">
                                    <h5 class="title"><a
                                            href="{{ asset('detalle-informacion/' . $item->id_publicacion . '') }}">{{ $item->titulo }}</a>
                                    </h5>
                                    <div class="post-meta cate">
                                        {{-- <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a> --}}
                                        <a href="#"><i class="far fa-calendar"></i>
                                            {{ date('d F, Y', strtotime($item->fecha_ini)) }}
                                        </a>
                                        <a href="#"><i class="fas fa-user"></i> Maria Ruiz</a>
                                    </div>
                                    <p>{{ $item->descripcion }}</p>
                                </div>
                                <div class="post-bottom">
                                    <a href="{{ asset('detalle-informacion/' . $item->id_publicacion . '') }}"
                                        class="read">LEER
                                        MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <ul class="default-pagination">
                <li>
                    <a href="#"><i class="fas fa-angle-left"></i></a>
                </li>
                <li>
                    <a href="#" class="active">01</a>
                </li>
                {{-- <li>
                    <a href="#" class="active">02</a>
                </li>
                <li>
                    <a href="#">03</a>
                </li> --}}
                <li>
                    <a href="#"><i class="fas fa-angle-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
@endsection
