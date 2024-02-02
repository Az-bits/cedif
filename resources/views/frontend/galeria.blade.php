@extends('frontend.app')
@section('content')
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Fotos De Nuestra Centro</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>
                        Galeria
                    </li>
                    {{-- <li>
                        Gallery
                    </li> --}}
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Gallery Section Starts Here========== -->
    <div class="gallery-section padding-top padding-bottom pos-rel">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="container">
            <ul class="filter-2">
                <li data-filter="*" class="active"><span class="category">Mostrar todo</span><span class="amount">08</span>
                </li>
                <li data-filter=".toddler"><span class="category">Niños pequeños</span><span class="amount">04</span></li>
                <li data-filter=".preschool"><span class="category">Prescolar</span><span class="amount">04</span></li>
                <li data-filter=".kinder"><span class="category">Programas de prekínter</span><span class="amount">03</span>
                </li>
                <li data-filter=".programe"><span class="category">Jardín de infancia</span><span class="amount">02</span>
                </li>
            </ul>
            <div class="masonary-wrapper">
                <div class="masonary-item preschool programe">
                    <div class="masonary-thumb">
                        <a href="{{ asset('images/jw-img-1.jpg') }}" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="{{ asset('images/jw-img-1.jpg') }}" alt="gallery">
                    </div>
                </div>
                {{-- <div class="masonary-item preschool programe">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g1.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g1.jpg" alt="gallery">
                    </div>
                </div> --}}
                <div class="masonary-item toddler">
                    <div class="masonary-thumb">
                        <a href="{{ asset('images/jw-img-2.jpg') }}" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="{{ asset('images/jw-img-2.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item preschool kinder">
                    <div class="masonary-thumb">
                        <a href="{{ asset('images/jw-img-3.jpg') }}" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="{{ asset('images/jw-img-3.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler programe">
                    <div class="masonary-thumb">
                        <a href="{{ asset('images/jw-img-4.jpg') }}" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="{{ asset('images/jw-img-4.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item preschool kinder">
                    <div class="masonary-thumb">
                        <a href="{{ asset('images/jw-img-5.jpg') }}" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="{{ asset('images/jw-img-5.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler">
                    <div class="masonary-thumb">
                        <a href="{{ asset('images/jw-img-6.jpg') }}" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="{{ asset('images/jw-img-6.jpg') }}" alt="gallery">
                    </div>
                </div>
                {{-- <div class="masonary-item preschool">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g7.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g7.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler kinder">
                    <div class="masonary-thumb">
                        <a href="assets/images/gallery/g8.jpg" class="img-pop"><i class="fas fa-expand"></i></a>
                        <img src="assets/images/gallery/g8.jpg" alt="gallery">
                    </div>
                </div> --}}
            </div>
            <div class="load-more">
                <a href="{{ route('contacto') }}" class="custom-button"><span>Empieza ahora</span></a>
            </div>
        </div>
    </div>
    <!-- ==========Gallery Section Ends Here========== -->
@endsection
