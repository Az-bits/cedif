@extends('backend.app')
@section('content')
    @php
        $contacto = $data['contacto'];
    @endphp
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                        <span>
                            <b> Error - </b> Oops! Parece que olvidaste completar algunos campos:</span><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">person</i>
                        </div>
                        <h4 class="card-title">Solicitud de Información</h4>
                    </div>
                    <div class="card-body ">
                        <form id="formulario_modal" method="post" action="{{ route('admin-contacto.update', $contacto) }}">
                            @csrf
                            @method('PUT')
                            <div class="row d-flex m-2">
                                <div class="col-12 mt-2">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group fl">
                                                <label for="ci">Cedula de Identidad</label>
                                                <input type="text" class="form-control input-reset" id="ci"
                                                    name="ci" placeholder="Cedula Identidad"
                                                    value="{{ old('ci', $contacto->ci) }}">
                                                <small class="text-danger" id="message"></small>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label for="nombre">Nombre completo</label>
                                                <input type="text" id="nombre" name="nombre" class="form-control"
                                                    value="{{ old('nombre', $contacto->nombre) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="celular">Celular</label>
                                                <input type="number" id="celular" name="celular" class="form-control"
                                                    value="{{ old('celular', $contacto->celular) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label for="email">Correo</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                    value="{{ old('email', $contacto->email) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <label for="descripcion">Asunto</label>
                                            <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="5">{{ old('descripcion', $contacto->descripcion) }}</textarea>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="f_f">Solicitud atendida</label>
                                                <div class="form-check">
                                                    <div class="form-group">
                                                        <label class="form-check-label">
                                                            Atendida <input name="estado" class="form-check-input"
                                                                type="checkbox" value="2"
                                                                {{ $contacto->estado == '2' ? 'checked' : '' }}>
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="row justify-content-center">
                                        <div class="form-group">
                                            <a href="{{ route('admin-contacto.index') }}" id="btnCancel"
                                                class="btn btn-danger mr-2" data-dismiss=""><i
                                                    class="material-icons">cancel</i>Cancelar</a>
                                            <button type="submit" id="btnSubmit" class="btn btn-primary ">
                                                <div class="load" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <i class="material-icons icon-load">done</i>
                                                <span class="btnTextSubmit">Guardar</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
