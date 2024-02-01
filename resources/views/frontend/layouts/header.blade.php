<header>
    {{-- {{ var_dump($data['telefonos']->numero) }} --}}
    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <ul class="left">

                    <li>
                        <i class="far fa-clock"></i>
                        {{ $data['horario']['hora_ini'] . ' am - ' . $data['horario']['hora_fin'] . ' pm Lun - Vie' }}
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-phone-alt"></i>
                            @foreach ($data['telefonos'] as $item)
                                <a href="https://api.whatsapp.com/send?phone={{ $item['numero'] }}" target="_blank">
                                    {{ $item['numero'] }}
                                </a>
                                @if (!$loop->last)
                                    - {{-- Solo imprime el guion si no es el último elemento --}}
                                @endif
                            @endforeach
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i> {{ $data['direccion'] }}
                    </li>
                </ul>
                <ul class="social-icons">
                    {{-- <li>
                        <a href="#"><i class="fab fa-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-wifi"></i></a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper" style="height: 6rem;">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo/logo-main.png" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu">
                        <li>
                            <a href="#0"><i class="fas fa-home"></i>Home</a>
                            <ul class="submenu">
                                <li>
                                    <a href="index.html">Home One</a>
                                </li>
                                <li>
                                    <a href="index-2.html" class="active">Home Two</a>
                                </li>
                                <li>
                                    <a href="index-3.html">Home Three</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.html"><i class="fas fa-user"></i>About</a>
                        </li>
                        <li>
                            <a href="#0"><i class="fas fa-book"></i>Classes</a>
                            <ul class="submenu">
                                <li>
                                    <a href="classes.html">Classes</a>
                                </li>
                                <li>
                                    <a href="class-single.html">Class Single</a>
                                </li>
                                <li>
                                    <a href="class-schedule.html">Class Schedule</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0"><i class="fas fa-pencil-alt"></i>Blog</a>
                            <ul class="submenu">
                                <li>
                                    <a href="blog-grid.html">Blog Grid</a>
                                </li>
                                <li>
                                    <a href="blog-classic.html">Blog Classic</a>
                                </li>
                                <li>
                                    <a href="blog-single.html">Blog Single</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0"><i class="fas fa-layer-group"></i>Pages</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#0">Teacher</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="teacher.html">Our Teacher</a>
                                        </li>
                                        <li>
                                            <a href="teacher-single.html">Teacher Single</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Account</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="login.html">Sign In</a>
                                        </li>
                                        <li>
                                            <a href="registration.html">Sign Up</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Events</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="events.html">Our Events</a>
                                        </li>
                                        <li>
                                            <a href="events-single.html">Events Single</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Shop</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="shop.html">Our Shop</a>
                                        </li>
                                        <li>
                                            <a href="shop-single.html">Shop Single</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Cart</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="faqs.html">Faqs</a>
                                </li>
                                <li>
                                    <a href="#0">Our Gallery</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="gallery.html">Gallery One</a>
                                        </li>
                                        <li>
                                            <a href="gallery-2.html">Gallery Two</a>
                                        </li>
                                        <li>
                                            <a href="gallery-3.html">Gallery Three</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="coming-soon.html">Coming Soon</a>
                                </li>
                                <li>
                                    <a href="error-page.html">404 Error</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html"><i class="fas fa-map-marker-alt"></i>Contacto</a>
                        </li>
                    </ul>

                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
