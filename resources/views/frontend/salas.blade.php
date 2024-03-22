@extends('frontend.app')
@section('content')
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Salas</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>

                        <a href="#">Más</a>
                    </li>
                    <li>
                        Salas
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
                @foreach ($data['salas'] as $item)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="{{ asset('detalle-sala/' . $item->id_sala . '') }}">
                                    <img style="max-height: 11rem;" src="{{ $item->image }}" alt="blog"></a>
                            </div>
                            <div class="post-content">
                                <div class="post-top">
                                    <h5 class="title"><a
                                            href="{{ asset('detalle-sala/' . $item->id_sala . '') }}">{{ $item->nombre }}</a>
                                    </h5>
                                    <p>{{ $item->subtitulo }}</p>
                                </div>
                                <div class="post-bottom">
                                    <a href="{{ asset('detalle-sala/' . $item->id_sala . '') }}" class="read">LEER
                                        MÁS</a>
                                    <a href="#" class="comments"><i class="far fa-comments"></i> <span
                                            class="comment-number">2</span></a>
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
