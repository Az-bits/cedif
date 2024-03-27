@php
    $institucionView = $data['page'] == 'institucion' || $data['page'] == 'salas' || $data['page'] == 'organigrama';
    $usuario = $data['usuario'];
@endphp
<div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo" style="padding: 10px 0;">
        <a href="{{ asset('dashboard') }}" style='justify-content: center;display: flex' class="simple-text logo-normal">
            <img src="{{ asset('assets/images/logo/cdi-logo.png') }}" alt="" height="80" style="width: 100%">
        </a>
        {{-- <a href="http://www.creative-tim.com/" class="simple-text logo-mini">
            CT
        </a> --}}
        {{-- 
        <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
            Centro de Desarrollo Infantil
        </a> --}}
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="https://t3.ftcdn.net/jpg/05/17/79/88/240_F_517798849_WuXhHTpg2djTbfNf0FQAjzFEoluHpnct.jpg" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        {{ $usuario->nombre . ' ' . $usuario->parterno . ' ' . $usuario->marterno }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Perfil </span>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                <span class="sidebar-mini"> CS</span>
                                <span class="sidebar-normal"> Cerrar Sesión </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">settings</i>
                    <p>
                        Administración
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse {{ $data['page'] == 'usuarios' ? 'show' : '' }}" id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item {{ $data['page'] == 'usuarios' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('usuarios.index') }}">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Usuarios </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item  {{ $data['page'] == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">home</i>
                    <p>Inicio</p>
                </a>
            </li>
            <li class="nav-item  {{ $data['page'] == 'persona' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin-persona.index') }}">
                    <i class="material-icons">person</i>
                    <p>Personas</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#instutionCollapse">
                    <i class="material-icons">apartment</i>
                    <p>Institución <b class="caret"></b></p>
                </a>
                <div class="collapse {{ $institucionView ? 'show' : '' }}" id="instutionCollapse">
                    <ul class="nav">
                        <li class="nav-item {{ $data['page'] == 'institucion' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin-institucion.index') }}">
                                <span class="sidebar-mini"> I </span>
                                <span class="sidebar-normal"> Institución </span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item {{ $data['page'] == 'salas' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin-salas.index') }}">
                                <span class="sidebar-mini"> SP </span>
                                <span class="sidebar-normal"> Salas Parbulo </span>
                            </a>
                        </li>
                    </ul>
                    {{-- <ul class="nav">
                        <li class="nav-item {{ $data['page'] == 'organigrama' ? 'active' : '' }}">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> O </span>
                                <span class="sidebar-normal"> Organigrama </span>
                            </a>
                        </li>
                    </ul> --}}
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#pages">
                    <i class="material-icons">web</i>
                    <p>
                        Pagina
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse  {{ ($data['page'] == 'publicacion' or $data['page'] == 'videosEE') ? 'show' : '' }}"
                    id="pages">
                    <ul class="nav">
                        <li class="nav-item {{ $data['page'] == 'publicacion' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin-publicacion.index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Publicaciones </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#videoCollapse">
                    <i class="material-icons">play_arrow</i>
                    <p>Videos <b class="caret"></b></p>
                </a>
                <div class="collapse {{ ($data['page'] == 'videos' or $data['page'] == 'canal') ? 'show' : '' }}"
                    id="videoCollapse">
                    <ul class="nav">
                        <li class="nav-item {{ $data['page'] == 'canal' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin-videos.canalYT') }}">
                                <span class="sidebar-mini"> CY </span>
                                <span class="sidebar-normal"> Canal YouTube </span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item {{ $data['page'] == 'videos' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin-videos.index') }}">
                                <span class="sidebar-mini"> V </span>
                                <span class="sidebar-normal"> Videos </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
