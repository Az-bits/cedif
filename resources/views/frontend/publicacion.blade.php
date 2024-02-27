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
                <div class="col-xl-4 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="assets/images/blog/blog01.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-top">
                                <h5 class="title"><a href="blog-single.html">How Kids make sense of Life Experiences</a>
                                </h5>
                                <div class="post-meta cate">
                                    <a href="#"><i class="far fa-calendar"></i> April 04, 2022</a>
                                    <a href="#"><i class="fas fa-user"></i> Robot Smith</a>
                                </div>
                                <p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas
                                    vis parallel customer service.</p>
                            </div>
                            <div class="post-bottom">
                                <a href="blog-single.html" class="read">LEER MÁS</a>
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
            <ul class="default-pagination">
                <li>
                    <a href="#"><i class="fas fa-angle-left"></i></a>
                </li>
                <li>
                    <a href="#">01</a>
                </li>
                <li>
                    <a href="#" class="active">02</a>
                </li>
                <li>
                    <a href="#">03</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-angle-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
@endsection
