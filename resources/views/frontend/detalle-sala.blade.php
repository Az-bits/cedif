@extends('frontend.app')
@section('content')
    @php
        $sala = $data['sala'];
        // dd($data);
    @endphp
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="{{ asset('assets/images/banner/page-header.jpg') }}">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">{{ $sala->titulo }}</h1>
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
                                <a href="javascript:void(0)"><img src="{{ $sala->image }}" alt="blog"></a>
                            </div>
                            <div class="post-content">
                                <div class="post-top">
                                    <h3 class="title"><a href="javascript:void(0)">{{ $sala->titulo }}</a></h3>
                                    <p>{!! $sala->descripcion !!}</p>
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
                                        <a href="{{ route('galeria') }}"><span><i
                                                    class="fas fa-angle-double-right"></i>Imagenes</span><span></span></a>
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
                                        <a href="{{ asset('salas-parvulo') }}">salas</a>
                                    </li>
                                    <li>
                                        {{-- <a href="#" class="active">sobre nosotros</a> --}}
                                        <a href="{{ asset('sobre-nosotros') }}">sobre nosotros</a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('contacto') }}">contacto</a>
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
