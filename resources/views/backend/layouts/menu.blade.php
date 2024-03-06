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
                <img src="https://cdn.vectorstock.com/i/preview-1x/48/37/web-developer-design-vector-5884837.jpg" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        Azbits
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Perfil </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" href="{{ route('logout') }}">
                                <span class="sidebar-mini"> CS</span>
                                <span class="sidebar-normal"> Cerrar Sesión </span>
                            </button>
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

                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('users.index') }}"> --}}
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Usuarios </span>
                            </a>
                            <x></x>
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
                <div class="collapse" id="instutionCollapse">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin-institucion.index') }}">
                                <span class="sidebar-mini"> I </span>
                                <span class="sidebar-normal"> Institución </span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> O </span>
                                <span class="sidebar-normal"> Organigrama </span>
                            </a>
                        </li>
                    </ul>
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

                <div class="collapse  {{ ($data['page'] == 'publicacion' or $data['page'] == 'videos') ? 'show' : '' }}"
                    id="pages">
                    <ul class="nav">
                        <li class="nav-item {{ $data['page'] == 'publicacion' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin-publicacion.index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Publicaciones </span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item  {{ $data['page'] == 'videos' ? 'active' : '' }}">
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
