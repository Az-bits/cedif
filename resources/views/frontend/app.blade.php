<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from labartisan.net/demo/kitton/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 14:20:28 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Centro Infantil</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flickity.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/flickity.pkgd.min.js') }}"></script>


    <style>
        .pencil {
            display: block;
            width: 10em;
            height: 10em;
        }

        .pencil__body1,
        .pencil__body2,
        .pencil__body3,
        .pencil__eraser,
        .pencil__eraser-skew,
        .pencil__point,
        .pencil__rotate,
        .pencil__stroke {
            animation-duration: 3s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .pencil__body1,
        .pencil__body2,
        .pencil__body3 {
            transform: rotate(-90deg);
        }

        .pencil__body1 {
            animation-name: pencilBody1;
        }

        .pencil__body2 {
            animation-name: pencilBody2;
        }

        .pencil__body3 {
            animation-name: pencilBody3;
        }

        .pencil__eraser {
            animation-name: pencilEraser;
            transform: rotate(-90deg) translate(49px, 0);
        }

        .pencil__eraser-skew {
            animation-name: pencilEraserSkew;
            animation-timing-function: ease-in-out;
        }

        .pencil__point {
            animation-name: pencilPoint;
            transform: rotate(-90deg) translate(49px, -30px);
        }

        .pencil__rotate {
            animation-name: pencilRotate;
        }

        .pencil__stroke {
            animation-name: pencilStroke;
            transform: translate(100px, 100px) rotate(-113deg);
        }

        /* Animations */
        @keyframes pencilBody1 {

            from,
            to {
                stroke-dashoffset: 351.86;
                transform: rotate(-90deg);
            }

            50% {
                stroke-dashoffset: 150.8;
                /* 3/8 of diameter */
                transform: rotate(-225deg);
            }
        }

        @keyframes pencilBody2 {

            from,
            to {
                stroke-dashoffset: 406.84;
                transform: rotate(-90deg);
            }

            50% {
                stroke-dashoffset: 174.36;
                transform: rotate(-225deg);
            }
        }

        @keyframes pencilBody3 {

            from,
            to {
                stroke-dashoffset: 296.88;
                transform: rotate(-90deg);
            }

            50% {
                stroke-dashoffset: 127.23;
                transform: rotate(-225deg);
            }
        }

        @keyframes pencilEraser {

            from,
            to {
                transform: rotate(-45deg) translate(49px, 0);
            }

            50% {
                transform: rotate(0deg) translate(49px, 0);
            }
        }

        @keyframes pencilEraserSkew {

            from,
            32.5%,
            67.5%,
            to {
                transform: skewX(0);
            }

            35%,
            65% {
                transform: skewX(-4deg);
            }

            37.5%,
            62.5% {
                transform: skewX(8deg);
            }

            40%,
            45%,
            50%,
            55%,
            60% {
                transform: skewX(-15deg);
            }

            42.5%,
            47.5%,
            52.5%,
            57.5% {
                transform: skewX(15deg);
            }
        }

        @keyframes pencilPoint {

            from,
            to {
                transform: rotate(-90deg) translate(49px, -30px);
            }

            50% {
                transform: rotate(-225deg) translate(49px, -30px);
            }
        }

        @keyframes pencilRotate {
            from {
                transform: translate(100px, 100px) rotate(0);
            }

            to {
                transform: translate(100px, 100px) rotate(720deg);
            }
        }

        @keyframes pencilStroke {
            from {
                stroke-dashoffset: 439.82;
                transform: translate(100px, 100px) rotate(-113deg);
            }

            50% {
                stroke-dashoffset: 164.93;
                transform: translate(100px, 100px) rotate(-113deg);
            }

            75%,
            to {
                stroke-dashoffset: 439.82;
                transform: translate(100px, 100px) rotate(112deg);
            }
        }
    </style>
</head>

<body>

    <!-- ==========Preloader Overlay Starts Here========== -->
    <div class="overlayer" style="background: #e8e8e8">
        <svg xmlns="http://www.w3.org/2000/svg" height="200px" width="200px" viewBox="0 0 200 200" class="pencil">
            <defs>
                <clipPath id="pencil-eraser">
                    <rect height="30" width="30" ry="5" rx="5"></rect>
                </clipPath>
            </defs>
            <circle transform="rotate(-113,100,100)" stroke-linecap="round" stroke-dashoffset="439.82"
                stroke-dasharray="439.82 439.82" stroke-width="2" stroke="currentColor" fill="none" r="70"
                class="pencil__stroke"></circle>
            <g transform="translate(100,100)" class="pencil__rotate">
                <g fill="none">
                    <circle transform="rotate(-90)" stroke-dashoffset="402" stroke-dasharray="402.12 402.12"
                        stroke-width="30" stroke="hsl(223,90%,50%)" r="64" class="pencil__body1"></circle>
                    <circle transform="rotate(-90)" stroke-dashoffset="465" stroke-dasharray="464.96 464.96"
                        stroke-width="10" stroke="hsl(223,90%,60%)" r="74" class="pencil__body2"></circle>
                    <circle transform="rotate(-90)" stroke-dashoffset="339" stroke-dasharray="339.29 339.29"
                        stroke-width="10" stroke="hsl(223,90%,40%)" r="54" class="pencil__body3"></circle>
                </g>
                <g transform="rotate(-90) translate(49,0)" class="pencil__eraser">
                    <g class="pencil__eraser-skew">
                        <rect height="30" width="30" ry="5" rx="5" fill="hsl(223,90%,70%)">
                        </rect>
                        <rect clip-path="url(#pencil-eraser)" height="30" width="5" fill="hsl(223,90%,60%)">
                        </rect>
                        <rect height="20" width="30" fill="hsl(223,10%,90%)"></rect>
                        <rect height="20" width="15" fill="hsl(223,10%,70%)"></rect>
                        <rect height="20" width="5" fill="hsl(223,10%,80%)"></rect>
                        <rect height="2" width="30" y="6" fill="hsla(223,10%,10%,0.2)"></rect>
                        <rect height="2" width="30" y="13" fill="hsla(223,10%,10%,0.2)"></rect>
                    </g>
                </g>
                <g transform="rotate(-90) translate(49,-30)" class="pencil__point">
                    <polygon points="15 0,30 30,0 30" fill="hsl(33,90%,70%)"></polygon>
                    <polygon points="15 0,6 30,0 30" fill="hsl(33,90%,50%)"></polygon>
                    <polygon points="15 0,20 10,10 10" fill="hsl(223,10%,10%)"></polygon>
                </g>
            </g>
        </svg>
        {{-- <div class="loader"> --}}

        {{-- <div class="loader-inner"> --}}
        {{-- </div> --}}
        {{-- </div> --}}
    </div>
    <div class="scrollToTop"><i class="fas fa-angle-up"></i></div>
    <div class="overlay"></div>
    <div class="overlayTwo"></div>


    <!-- ==========Preloader Overlay Ends Here========== -->

    <!-- ==========Header Section Starts Here========== -->

    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/pa2fA54s6vE?autoplay=1" frameborder="0"
        allowfullscreen></iframe> --}}


    @include('frontend.layouts.header')
    <!-- ==========Header Section Ends Here========== -->

    <!-- ===========Header Search=========== -->
    <div class="header-form">
        <div class="bg-lay">
            <div class="cross">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <form class="form-container">
            <input type="text" placeholder="Input Your Search" name="name">
            <button type="submit">Search</button>
        </form>
    </div>
    <!-- ===========Header Search=========== -->

    <!-- ===========Header Cart=========== -->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="index.html" class="logo">
                <img src="assets/images/logo/logo.png" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop01.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Color Pencil</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del>
                        </div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop02.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Water Pot</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del>
                        </div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop03.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Art Paper</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del>
                        </div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop04.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Stop Watch</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del>
                        </div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop05.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Comics Book</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del>
                        </div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="#" class="custom-button"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========Header Cart=========== -->

    @yield('content')

    <!-- ==========Footer Section Starts Here========== -->
    @include('frontend.layouts.footer')
    <!-- ==========Footer Section Ends Here========== -->

    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="{{ asset('assets/js/map.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


<!-- Mirrored from labartisan.net/demo/kitton/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 14:20:52 GMT -->

</html>
