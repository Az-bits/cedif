@extends('backend.app')
@section('content')
    @php
        $galeria = $data['galeria'];
    @endphp
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">holiday_village</i>
                        </div>
                        <h4 class="card-title">Editar imagen en Galeria</h4>
                    </div>
                    <div class="card-body ">
                        <form id="formulario_modal" method="post" action="{{ route('admin-galerias.update', $galeria) }}"
                            enctype="multipart/form-data">
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
                                <div class="col-md-12 mt-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group fl">
                                                <label for="image">Imagen</label>
                                                <div class="row d-flex justify-content-center" style="width: 100%;">
                                                    <div class="col-md-12 text-center">
                                                        <div class="fileinput fileinput-new text-center"
                                                            data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-raised">
                                                                <!-- <img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" rel="nofollow" alt="..."> -->
                                                                <img src="{{ $galeria->image }}" id="preViewImage"
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
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="titulo">Titulo </label>
                                                    <input type="text" id="titulo" name="titulo" class="form-control"
                                                        placeholder="Titulo de la imagen"
                                                        value="{{ old('titulo', $galeria->titulo) }}">
                                                </div>
                                                <div class="col-lg-12 mt-3">
                                                    <label for="descripcion">Descripción </label>
                                                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control">{{ old('descripcion', $galeria->descripcion) }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-lg-12 mt-3">
                                            <div class="row justify-content-center">
                                                <div class="form-group">
                                                    <a href="{{ route('admin-galerias.index') }}" id="btnCancel"
                                                        class="btn btn-danger mr-2" data-dismiss=""><i
                                                            class="material-icons">cancel</i>Cancelar</a>
                                                    <button type="submit" class="btn btn-primary ">
                                                        <div class="load" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                        <i class="material-icons icon-load">done</i> <span
                                                            class="btnTextSubmit">Guardar
                                                            Imagen</span>
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
    <script>
        ClassicEditor.create(document.querySelector('#descripcion')).then((editor) => {
            ckEditorObj = editor;
        });
    </script>
@endsection
