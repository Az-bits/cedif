@extends('backend.app')
@section('content')
    @php
        $publicacion = $data['publicacion'];
        // var_dump($publicacion->fecha_fin);
        // exit();
    @endphp
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">feed</i>
                        </div>
                        <h4 class="card-title">Editar Publicación</h4>
                    </div>
                    <div class="card-body ">
                        <form id="formulario_modal" method="post"
                            action="{{ route('admin-publicacion.update', $publicacion) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>
                                                <b> Error - </b> Oops! Parece que olvidaste completar algunos
                                                campos:</span><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row d-flex m-2">

                                <h4>1. Datos publicación</h4>
                                <div class="col-md-12 mt-2" id="person">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group fl">
                                                <label for="image">Imagen</label>
                                                <div class="row d-flex justify-content-center" style="width: 100%;">
                                                    <div class="col-md-12 text-center">
                                                        <div class="fileinput fileinput-new text-center"
                                                            data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-raised">
                                                                <!-- <img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" rel="nofollow" alt="..."> -->
                                                                <img src="{{ $publicacion->image }}" id="preViewImage"
                                                                    rel="nofollow" alt="...">
                                                            </div>
                                                            <div
                                                                class="fileinput-preview fileinput-exists thumbnail img-raised">
                                                            </div>
                                                            <div>
                                                                <span class="btn btn-raised btn-round btn-rose btn-file">
                                                                    <span class="fileinput-new">Seleccione Imagen</span>
                                                                    <span class="fileinput-exists">Seleccionar</span>
                                                                    <input type="file" name='imagen'
                                                                        accept="image/jpg,image/png,image/jpeg" />
                                                                </span>
                                                                <a href="javascript:;"
                                                                    class="btn btn-danger btn-round fileinput-exists"
                                                                    data-dismiss="fileinput">
                                                                    <i class="fa fa-times"></i> Remover</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 mt-2">
                                            <div class="form-group">
                                                <label for="titulo">Título </label>
                                                <input type="text" id="titulo" name="titulo"
                                                    class="form-control datepicker" placeholder="Nombre de la publicación"
                                                    value="{{ old('titulo', $publicacion->titulo) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tipo">Tipo de publicación <span class="az-r">( *
                                                        )</span></label><br>
                                                <select class="selectpicker" data-style="btn btn-primary btn-round" data-
                                                    title="Seleccione" name="tipo" id="tipo">
                                                    <option
                                                        {{ old('tipo', $publicacion->tipo) == 'CONVOCATORIA' ? 'selected' : '' }}
                                                        value="CONVOCATORIA">CONVOCATORIA</option>
                                                    <option
                                                        {{ old('tipo', $publicacion->tipo) == 'COMUNICADOS' ? 'selected' : '' }}
                                                        value="COMUNICADOS">COMUNICADOS</option>
                                                    <option
                                                        {{ old('tipo', $publicacion->tipo) == 'AVISOS' ? 'selected' : '' }}
                                                        value="AVISOS">AVISOS</option>
                                                    <option
                                                        {{ old('tipo', $publicacion->tipo) == 'EVENTOS' ? 'selected' : '' }}
                                                        value="EVENTOS">EVENTOS</option>
                                                    <option
                                                        {{ old('tipo', $publicacion->tipo) == 'PUBLICACION' ? 'selected' : '' }}
                                                        value="PUBLICACION">PUBLICACIÓN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <label for="descripcion">Descripción </label>
                                                <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control">{{ old('descripcion', $publicacion->descripcion) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <label for="direccion">Dirección <span class="az-r" data-toggle="tooltip"
                                                        data-placement="top" title="Opcional">( * )</span> </label>
                                                <input type="text" id="direccion" name="direccion" class="form-control"
                                                    placeholder="Ubicacion..."
                                                    value="{{ old('direccion', $publicacion->direccion) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="fecha_ini">Fecha de Inicio</label>
                                                <input type="date" id="fecha_ini" name="fecha_ini"
                                                    value="{{ old('fecha_ini', $publicacion) }}" class="form-control"
                                                    placeholder="mm-dd-aaaa">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="f_f">Fecha de Finalización
                                                    {{ $publicacion->fecha_fin }}</label>
                                                <input type="date" id="f_f" name="fecha_fin"
                                                    class="form-control" placeholder="mm-dd-aaaa"
                                                    value="{{ $publicacion->fecha_fin }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="f_f">Visibilidad</label>
                                                <div class="form-check">
                                                    <div class="form-group">
                                                        <label class="form-check-label">
                                                            Publicar <input name="estado" class="form-check-input"
                                                                type="checkbox" value="2"
                                                                {{ $publicacion->estado == '2' ? 'checked' : '' }}>
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-lg-12 mt-3">
                                            <div class="row justify-content-center">
                                                <div class="form-group">
                                                    <a href="{{ route('admin-publicacion.index') }}" id="btnCancel"
                                                        class="btn btn-danger mr-2" data-dismiss=""><i
                                                            class="material-icons">cancel</i>Cancelar</a>
                                                    <button type="submit" class="btn btn-primary ">
                                                        <div class="load" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                        <i class="material-icons icon-load">done</i> <span
                                                            class="btnTextSubmit">Actualizar
                                                            publicación</span>
                                                    </button>
                                                </div>
                                            </div>
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
