@extends('frontend.app')
@section('content')
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">{{ $data['title'] }}</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>

                        <a href="#">Información</a>
                    </li>
                    <li>
                        {{ $data['title'] }}
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
                @if ($data['publicaciones']->total() == 0)
                    <h2 class="text-center text-secondary">Sin {{ $data['title'] }}</h2>
                @endif

                @foreach ($data['publicaciones'] as $item)
                    @if ($item->estado == '2')
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
                                            <a href="#"><i class="far fa-calendar"></i>
                                                {{ \Carbon\Carbon::createFromFormat('d F, Y', date('d F, Y', strtotime($item->fecha_ini)))->locale('es')->isoFormat('D MMMM, YYYY') }}
                                            </a>
                                            <a href="#"><i class="fas fa-user"></i>
                                                {{ $item->usuario->nombre . ' ' . $item->usuario->paterno }}</a>
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
                    @endif
                @endforeach

            </div>
            @php
                $paginate = $data['publicaciones'];
            @endphp
            @if (!$data['publicaciones']->total() == 0)
                <ul class="default-pagination">
                    @if ($paginate->onFirstPage())
                        <li class="disabled">
                            <a href="#"><i class="fas fa-angle-left"></i></a>
                        </li>
                    @else
                        <li>
                            <a href="{{ $paginate->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
                        </li>
                    @endif

                    @foreach ($paginate->getUrlRange(1, $paginate->lastPage()) as $page => $url)
                        <li>
                            <a href="{{ $url }}"
                                class="{{ $paginate->currentPage() == $page ? 'active' : '' }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($paginate->hasMorePages())
                        <li>
                            <a href="{{ $paginate->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                        </li>
                    @else
                        <li class="disabled">
                            <a href="#"><i class="fas fa-angle-right"></i></a>
                        </li>
                    @endif
                </ul>
            @endif

        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
@endsection
