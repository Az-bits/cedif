@php
    $contacto = $data['contacto'];
@endphp
<header>
    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <ul class="left">

                    <li>
                        <i class="far fa-clock"></i>
                        {{ $contacto['horario']['hora_ini'] . 'am - ' . $contacto['horario']['hora_fin'] . 'pm Lun - Vie' }}
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-phone-alt"></i>
                            <a href="https://api.whatsapp.com/send?phone={{ $data['institucion']->celular1 }}&text=Buenos%20días,%20necesito%20información%20sobre%20el%20centro%20infantil"
                                target="_blank">{{ $data['institucion']->celular1 }}</a>

                            -
                            <a href="https://api.whatsapp.com/send?phone={{ $data['institucion']->celular2 }}&text=Buenos%20días,%20necesito%20información%20sobre%20el%20centro%20infantil"
                                target="_blank">{{ $data['institucion']->celular2 }}</a>

                        </a>
                    </li>
                    <li>
                        <a href="#ubicacion"><i class="fas fa-map-marker-alt"></i>
                            {{ $data['institucion']->direccion }}</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"class="d-flex align-items-center justify-content-center"> <i
                                class="material-symbols-outlined">
                                login
                            </i> Ingresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper" style="height: 6rem;">
                <div class="logo m-auto">
                    <a href="/">
                        <img src="{{ asset('assets/images/logo/logo-main.png') }}" alt="logo" style="width: 18em">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu">
                        <li>
                            <a href="/"><i class="fas fa-home"></i>Inicio</a>
                            <ul class="submenu">
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fas fa-book"></i>Sobre Nosotros</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('sobre-nosotros') }}">Sobre Nosotros</a>
                                </li>
                                <li>
                                    <a href="{{ route('galeria') }}">Nuestra fotografias</a>
                                </li>
                                <li>
                                    {{-- <a href="{{ route('organigrama') }}">Organigrama</a> --}}
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fas fa-book"></i>Salas</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('salas-parvulo') }}">Salas parvulo</a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('sala-comedor') }}">Sala comedor</a>
                                </li>
                                <li>
                                    <a href="{{ route('sala-musica') }}">Sala música</a>
                                </li>
                                <li>
                                    <a href="{{ route('sala-arte') }}">Sala Arte</a>
                                </li>
                                <li>
                                    <a href="{{ route('auditorio') }}">Auditorio</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fas fa-layer-group"></i>Información</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('publicaciones') }}">Publicaciones</a>
                                </li>
                                <li>
                                    <a href="{{ route('convocatorias') }}">Convocatoria</a>
                                </li>
                                <li>
                                    <a href="{{ route('eventos') }}">Eventos</a>
                                </li>

                                <li>
                                    <a href="{{ route('comunicados') }}">Comunicados</a>
                                </li>
                                <li>
                                    <a href="{{ route('avisos') }}">Avisos</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="#"><i class="fas fa-layer-group"></i>Servicios Educativos</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#">Sala </a>
                                </li>
                                <li>
                                    <a href="#l">Apoyo Escolar</a>
                                </li>
                                <li>
                                    <a href="#">Sala Parvulo</a>
                                </li>
                                <li>
                                    <a href="#">Desarrollo Integral</a>
                                </li>
                                <li>
                                    <a href="#">Estimulacion Temprana</a>
                                </li>
                                <li>
                                    <a href="#">Psicomotricidad</a>
                                </li>
                                <li>
                                    <a href="#">Lecto-Escritura</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="{{ route('contacto') }}"><i class="fas fa-map-marker-alt"></i>Contacto</a>
                        </li>
                        <li>
                            {{-- <a href="#"><i class="fas fa-pencil-alt"></i>Blog</a> --}}
                            <a href="javascript:void(0)"><i class="fas fa-plus"></i>Más</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('galeria') }}">Galeria</a>
                                </li>
                                <li>
                                    <a href="{{ route('videos') }}">Videos</a>
                                </li>
                                {{-- <li>
                                    <a href="blog-single.html">Blog Single</a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="">Iniciar Sesión</a>
                        </li> --}}
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
