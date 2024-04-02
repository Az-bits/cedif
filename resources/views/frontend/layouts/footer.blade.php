@php
    setlocale(LC_ALL, 'es_ES');
@endphp
<footer class="bg_img" data-background="{{ asset('assets/images/footer/footer-bg.jpg') }}">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4 mb--50">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget widget-about">
                        <h5 class="title">Acerca de nuestro centro</h5>
                        <p>El centro de desarrollo infantil “Jisk´a Wawa”, tiene un carácter de desarrollo social, para
                            la comunidad universitaria, destinado a hijos menores de 5 años de estudiantes, docentes y
                            administrativos de esta Casa Superior de Estudios.</p>
                        <ul class="contact">
                            <li><i class="fas fa-headphones-alt"></i><a href="Tel:67031409 ">67031409 - 74277575 -
                                    75800862
                                </a></li>
                            <li><i class="fas fa-home"></i>{{ $data['institucion']->direccion }}</li>
                            <li><i class="fas fa-globe-asia"></i><a href="#">www.jiskawawa.upea.bo </a>
                            </li>
                        </ul>
                        <ul class="social-icons">
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=67031409" target="_blank"
                                    class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            {{-- <li>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            </li> --}}
                            <li>
                                <a href="https://www.youtube.com/@jiskawawa" target="_blank" class="youtube"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget widget-blog">
                        <h5 class="title">Públicaciones recientes</h5>
                        <ul class="footer-blog">
                            @foreach ($data['publicaciones'] as $item)
                                <li>
                                    <div class="thumb">
                                        <a href="{{ asset('detalle-informacion/' . $item->id_publicacion . '') }}">
                                            <img src="{{ $item->image }}" alt="footer">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a
                                            href="{{ asset('detalle-informacion/' . $item->id_publicacion . '') }}">{{ $item->titulo }}</a>
                                        <span>
                                            {{ \Carbon\Carbon::createFromFormat('F d, Y', date('F d, Y', strtotime($item->fecha_ini)))->locale('es')->isoFormat('LL') }}</span>


                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pl-xl-4">
                    <div class="footer-widget widgt-form">
                        <h5 class="title">¿Necesitas más información?</h5>
                        <p>Contactate con nosotros y te guiaremos</p>
                        <form action="{{ route('contacto') }}" class="footer-form">
                            {{-- <input type="text" placeholder="Enter your email" name="email"> --}}
                            <button type="submit">
                                <span class="shape"></span>
                                <span><i class="flaticon-vegan"></i> contactarse ahora!</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>
                &copy; Todos los derechos reservados. <a href="https://sie.upea.bo/" target="_blank">SIE - 2024,</a>
                Desarrollado por <a href="javascript:void(0)">Edar</a>
            </p>
        </div>
    </div>
</footer>
