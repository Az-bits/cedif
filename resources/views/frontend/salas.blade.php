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
                                    <img style="max-height: 11rem;" src="{{ $item->image }}" alt="{{ $item->nombre }}"></a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            @php
                $salas = $data['salas'];
            @endphp
            <ul class="default-pagination">
                @if ($salas->onFirstPage())
                    <li class="disabled">
                        <a href="#"><i class="fas fa-angle-left"></i></a>
                    </li>
                @else
                    <li>
                        <a href="{{ $salas->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
                    </li>
                @endif

                @foreach ($salas->getUrlRange(1, $salas->lastPage()) as $page => $url)
                    <li>
                        <a href="{{ $url }}"
                            class="{{ $salas->currentPage() == $page ? 'active' : '' }}">{{ $page }}</a>
                    </li>
                @endforeach

                @if ($salas->hasMorePages())
                    <li>
                        <a href="{{ $salas->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                    </li>
                @else
                    <li class="disabled">
                        <a href="#"><i class="fas fa-angle-right"></i></a>
                    </li>
                @endif
            </ul>

        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
@endsection
