@extends('backend.app')
@section('content')
    @php
        $institucion = $data['institucion'];
        // dd($institucion);
    @endphp

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Información principal del Centro de Desarrollo Infantil
                        </h4>
                    </div>
                    <div class="card-body ">

                        <div class="row">
                            <div class="col-lg-2 col-md-6">
                                <ul class="nav nav-pills nav-pills-rose nav-pills-icons flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#link110" role="tablist">
                                            <i class="material-icons">dashboard</i> Información
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#link111" role="tablist">
                                            <i class="material-icons">edit_square</i> Editar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="link110">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                        <span>
                                                            <b> Error - </b> Oops! Parece que olvidaste completar
                                                            algunos campos:</span><br>
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Misión</h3>
                                                {!! $institucion->mision !!}
                                            </div>
                                            <div class="col-lg-6" style="border-left: 1px solid rgba(0, 0, 0, .1);">
                                                <h3>Visión</h3>
                                                {!! $institucion->vision !!}

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3>Objetivos</h3>
                                                {!! $institucion->objetivo !!}
                                            </div>
                                            <div class="col-lg-12">
                                                <h3>Historia</h3>
                                                {!! $institucion->historia !!}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg 12">
                                                <div id="accordion" role="tablist">
                                                    <div class="card-collapse">
                                                        <div class="card-header" role="tab" id="headingOne">
                                                            <h3 class="mb-0">
                                                                <a data-toggle="collapse" href="#collapseOne"
                                                                    aria-expanded="true" aria-controls="collapseOne"
                                                                    class="collapsed" style='font-size: 22px'>
                                                                    Sobre la Institución
                                                                    <i class="material-icons">keyboard_arrow_down</i>
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseOne" class="collapse show" role="tabpanel"
                                                            aria-labelledby="headingOne" data-parent="#accordion"
                                                            style="">
                                                            <div class="card-body">
                                                                {!! $institucion->sobre_institucion !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg 12">
                                                <div class="card text-center">
                                                    <div class="card-header p-0">
                                                        <h3>Información de contacto</h3>
                                                    </div>
                                                    <div class="card-body mt-0">
                                                        <div class="row">
                                                            <div class="col-lg-6 d-block">
                                                                <div class="d-flex justify-content-between"><b>Correo 1:
                                                                    </b>
                                                                    <span>{{ $institucion->correo }}</span>
                                                                </div>
                                                                <div class="d-flex justify-content-between"><b>Correo 2:
                                                                    </b>
                                                                    <span>{{ $institucion->correo2 }}</span>
                                                                </div>
                                                                <div class="d-flex justify-content-between"><b>Celular 1:
                                                                    </b>
                                                                    <span>{{ $institucion->celular1 }}</span>
                                                                </div>
                                                                <div class="d-flex justify-content-between"><b>Celular 2:
                                                                    </b>
                                                                    <span>{{ $institucion->celular2 }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 d-block">
                                                                <div class="d-flex justify-content-between"><b>Telefono 1:
                                                                    </b>
                                                                    <span>{{ $institucion->telefono1 }}</span>
                                                                </div>
                                                                <div class="d-flex justify-content-between"><b>Telefono 2:
                                                                    </b>
                                                                    <span>{{ $institucion->telefono2 }}</span>
                                                                </div>
                                                                <div class="d-flex justify-content-between"><b>YouTube: </b>
                                                                    <span><a
                                                                            href="{{ $institucion->youtube }}">{{ $institucion->youtube }}</a></span>
                                                                </div>
                                                                <div class="d-flex justify-content-between"><b>Facebook:
                                                                    </b>
                                                                    <span><a
                                                                            href="{{ $institucion->facebook }}">{{ $institucion->facebook }}</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="card-header p-0">
                                                            <h3>Ubicación</h3>
                                                        </div>
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1137.3903343415705!2d-68.19275061591475!3d-16.490224711822528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf246daebfb9%3A0x2a4becb95f2f7651!2sEdificio%20del%20%C3%81rea%20Sociales%20de%20la%20UPEA!5e0!3m2!1ses-419!2sbo!4v1709309676020!5m2!1ses-419!2sbo"
                                                            width="100%" height="450" style="border:0;"
                                                            allowfullscreen="" loading="lazy"
                                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="link111">
                                        @include('backend.institucion.form', [
                                            'institucion' => $institucion,
                                        ])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
