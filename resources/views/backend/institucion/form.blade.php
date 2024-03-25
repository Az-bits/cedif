<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
    <div class="col-md-12">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                <i class="material-icons">feed</i>
            </div>
            <h4 class="card-title">Editar Información</h4>
        </div>
        <hr>
        <div class="card-body ">
            <form id="formulario_modal" method="post" action="{{ route('admin-institucion.update', $institucion) }}">
                @csrf
                @method('PUT')
                <div class="row d-flex m-2">
                    <div class="col-12 mt-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="mision">Misión</label>
                                <textarea name="mision" id="mision" cols="30" rows="5" class="form-control">{{ old('mision', $institucion->mision) }}</textarea>
                            </div>
                            <div class="col-lg-6">
                                <label for="vision">Visión</label>
                                <textarea name="vision" id="vision" cols="30" rows="5" class="form-control">{{ old('vision', $institucion->vision) }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <label for="objetivo">Objetivos</label>
                                <textarea name="objetivo" value="objetivo" id="objetivo">{{ old('objetivo', $institucion->objetivo) }}</textarea>
                            </div>
                            <div class="col-lg-6">
                                <label for="sobre_institucion">Sobre la Institución</label>
                                <textarea name="sobre_institucion" id="sobre_institucion">{{ old('sobre_institucion', $institucion->sobre_institucion) }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <label for="historia">Historia</label>
                                <textarea name="historia" id="historia">{{ old('historia', $institucion->historia) }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <label for="celular1">celular 1</label>
                                <input type="text" id="celular1" name="celular1" class="form-control"
                                    value="{{ old('celular1', $institucion->celular1) }}">
                            </div>
                            <div class="col-lg-3">
                                <label for="celular2">celular 2</label>
                                <input type="text" id="celular2" name="celular2" class="form-control"
                                    value="{{ old('celular2', $institucion->celular2) }}">
                            </div>
                            <div class="col-lg-3">
                                <label for="telefono1">telefono 1</label>
                                <input type="text" id="telefono1" name="telefono1" class="form-control"
                                    value="{{ old('telefono1', $institucion->telefono1) }}">
                            </div>
                            <div class="col-lg-3">
                                <label for="telefono2">telefono 2</label>
                                <input type="text" id="telefono2" name="telefono2" class="form-control"
                                    value="{{ old('telefono2', $institucion->telefono2) }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <label for="correo">correo 1</label>
                                <input type="text" id="correo" name="correo" class="form-control"
                                    value="{{ old('correo', $institucion->correo) }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="correo2">correo 2</label>
                                <input type="text" id="correo2" name="correo2" class="form-control"
                                    value="{{ old('correo2', $institucion->correo2) }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <label for="youtube">Youtube</label>
                                <input type="text" id="youtube" name="youtube" class="form-control"
                                    value="{{ old('youtube', $institucion->youtube) }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="facebook">Facebook</label>
                                <input type="text" id="facebook" name="facebook" class="form-control"
                                    value="{{ old('facebook', $institucion->facebook) }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <label for="ubicacion">Google Maps</label>
                                <input type="text" id="ubicacion" name="ubicacion" class="form-control"
                                    value="{{ old('ubicacion', $institucion->ubicacion) }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="row justify-content-center">
                            <div class="form-group">
                                <a href="{{ route('admin-institucion.index') }}" id="btnCancel"
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
<script>
    ClassicEditor.create(document.querySelector('#mision')).then((editor) => {
        ckEditorObj = editor;
    });
    ClassicEditor.create(document.querySelector('#vision')).then((editor) => {
        ckEditorObj = editor;
    });
    ClassicEditor.create(document.querySelector('#objetivo')).then((editor) => {
        ckEditorObj = editor;
    });
    ClassicEditor.create(document.querySelector('#sobre_institucion')).then((editor) => {
        ckEditorCont = editor;
    });
    ClassicEditor.create(document.querySelector('#historia')).then((editor) => {
        ckEditorReq = editor;
    });
</script>
