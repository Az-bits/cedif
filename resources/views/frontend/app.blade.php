<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from labartisan.net/demo/kitton/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 14:20:28 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>kitton - Kids & Kindergarten School HTML Template</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
</head>

<body>


    <!-- ==========Preloader Overlay Starts Here========== -->
    <div class="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <div class="scrollToTop"><i class="fas fa-angle-up"></i></div>
    <div class="overlay"></div>
    <div class="overlayTwo"></div>
    <!-- ==========Preloader Overlay Ends Here========== -->

    <!-- ==========Header Section Starts Here========== -->
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

    <!-- ==========Map Section Starts Here========== -->
    <div class="map-section pos-rel">
        <div class="maps"></div>
        <div class="contact-area padding-bottom padding-top pt-lg-0 pb-lg-0">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/01.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Class Sessions</h6>
                            <ul>
                                <li>Sunday - Monday</li>
                                <li>08:00 am – 11:00 am (Fri Closed)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/02.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">kittons Address</h6>
                            <ul>
                                <li>123 White Amphitheatre Kinway, Mountain, CA 12345, USA</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/03.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Openning Hours</h6>
                            <ul>
                                <li>Sunday - Monday</li>
                                <li>08.00 am – 05.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/04.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Phone & E-mail</h6>
                            <ul>
                                <li><a href="Tel:05210021020">+123 456 78910, 0265478</a></li>
                                <li><a href="Mailto:sfkljsdfsj@gmail.com">enroll@kittons.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Map Section Ends Here========== -->


    <!-- ==========Footer Section Starts Here========== -->
    @include('frontend.layouts.footer')
    <!-- ==========Footer Section Ends Here========== -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/progress.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="assets/js/map.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from labartisan.net/demo/kitton/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 14:20:52 GMT -->

</html>
