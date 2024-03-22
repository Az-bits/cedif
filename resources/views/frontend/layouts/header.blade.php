@php

    $contacto = $data['contacto'];

@endphp
<header>
    {{-- {{ var_dump($data['telefonos']->numero) }} --}}
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
                            @foreach ($contacto['telefonos'] as $item)
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
                        <i class="fas fa-map-marker-alt"></i> {{ $contacto['direccion'] }}
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="{{ route('login') }}"class="d-flex align-items-center"> <i
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
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('assets/images/logo/logo-main.png') }}" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu">
                        <li>
                            <a href="/"><i class="fas fa-home"></i>Inicio</a>
                            <ul class="submenu">
                                {{-- <li>
                                    <a href="index.html">Home One</a>
                                </li>
                                <li>
                                    <a href="index-2.html" class="active">Home Two</a>
                                </li>
                                <li>
                                    <a href="index-3.html">Home Three</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fas fa-book"></i>Sobre Nosotros</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('sobre-nosotros') }}">Sobre Nosotros</a>
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
                                    <a href="{{ route('salas-parvulo') }}">Sala parvulo</a>
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
                                {{-- <li>
                                    <a href="{{ route('eventos') }}">Eventos</a>
                                </li>

                                <li>
                                    <a href="{{ route('comunicados') }}">Comunicados</a>
                                </li>
                                <li>
                                    <a href="{{ route('avisos') }}">Avisos</a>
                                </li> --}}
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
                                    <a href="{{ route('publicaciones') }}">Publicaciones</a>
                                </li>
                                {{-- <li>
                                    <a href="blog-classic.html">Blog Classic</a>
                                </li>
                                <li>
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
