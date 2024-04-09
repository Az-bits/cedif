@extends('frontend.app')
@section('content')
    @php
        $publicacion = $data['publicacion'];
        // dd($data);
    @endphp
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="{{ asset('assets/images/banner/page-header.jpg') }}">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">{{ $publicacion->titulo }}</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>
                        Detalle - {{ $data['title'] }}
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Blog Section Starts Here========== -->
    <div class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-8 mb-50">
                    <article class="blog-article">
                        <div class="post-item post-classic">
                            <div class="post-thumb">
                                <a href="javascript:void(0)"><img src="{{ $publicacion->image }}" alt="blog"></a>
                            </div>
                            <div class="post-content">
                                <div class="post-top">
                                    <h3 class="title"><a href="javascript:void(0)">{{ $publicacion->titulo }}</a></h3>
                                    <ul class="meta-post">
                                        <li>
                                            <a href="javascript:void(0)"><i class="far fa-user"></i>
                                                {{ $publicacion->usuario->nombre . ' ' . $publicacion->usuario->paterno }}</a>
                                        </li>
                                        {{-- <li>
                                            <a href="#"><i class="far fa-heart"></i>124 Likes</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-comments"></i>09 Comments</a>
                                        </li> --}}
                                    </ul>
                                    <p>{{ $publicacion->descripcion }}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-50">
                    <aside>
                        <div class="widget widget-search">
                            <div class="widget-body">
                                <form class="search-form">
                                    <input type="text" placeholder="Buscar...">
                                    <button type="button"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget-category">
                            <div class="widget-header">
                                <h5 class="title">Categorias</h5>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)"><span><i
                                                    class="fas fa-angle-double-right"></i>Publicaciones</span><span></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><span><i
                                                    class="fas fa-angle-double-right"></i>Convocatoria</span><span></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><span><i
                                                    class="fas fa-angle-double-right"></i>Eventos</span><span></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><span><i
                                                    class="fas fa-angle-double-right"></i>Comunicados</span><span></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><span><i
                                                    class="fas fa-angle-double-right"></i>Avisos</span><span></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-gallery">
                            <div class="widget-header">
                                <h5 class="title">Galeria de Fotos</h5>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    @foreach ($data['galeria'] as $item)
                                        <li>
                                            <a href="{{ $item->image }}" class="img-pop">
                                                <img src="{{ $item->image }}" alt="gallery">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-tags">
                            <div class="widget-header">
                                <h5 class="title">Tags Popular </h5>
                            </div>
                            <div class="widget-body">
                                <ul class="tags">
                                    <li>
                                        <a href="#">salas</a>
                                    </li>
                                    <li>
                                        {{-- <a href="#" class="active">sobre nosotros</a> --}}
                                        <a href="#">sobre nosotros</a>
                                    </li>
                                    <li>
                                        <a href="#">contacto</a>
                                    </li>
                                    <li>
                                        <a href="#">organigrama</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
@endsection
