@extends('backend.app')
@section('content')
    @php
        $autoridad = $data['autoridad'];
        // dd($autoridad);
        $persona = $data['persona'];
        // dd($persona);
    @endphp
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <div class="container-fluid" style="max-width: 50rem;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">feed</i>
                        </div>
                        <h4 class="card-title">Editar Autoridad</h4>
                    </div>
                    <div class="card-body ">
                        <form id="formulario_modal" method="post"
                            action="{{ route('admin-autoridad.update', $autoridad) }}" enctype="multipart/form-data">
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

                                <h4>1. Datos personales</h4>
                                <input type="hidden" id="id_persona" name="id_persona"
                                    value="{{ old('id_persona', $autoridad->id_persona) }}">
                                <div class="col-md-12 mt-2" id="person">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="ci" class="text-dark">Persona</label>
                                            <br>
                                            <select id='select-person' class="" name="state"
                                                data-style="btn btn-primary btn-round">
                                                <option></option>
                                                @foreach ($data['personas'] as $item)
                                                    <option
                                                        {{ old('id_persona', $item ? $item->id_persona : '') == $autoridad->id_persona ? 'selected' : '' }}
                                                        value="{{ $item->id_persona }}">
                                                        {{ $item->ci . '.:' . $item->nombre . ' ' . $item->paterno . ' ' . $item->materno }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="form-group fl">
                                                <label for="image">Fotografia</label>
                                                <div class="row d-flex justify-content-center" style="width: 100%;">
                                                    <div class="col-md-12 text-center">
                                                        <div class="fileinput fileinput-new text-center"
                                                            data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-raised">
                                                                <!-- <img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" rel="nofollow" alt="..."> -->
                                                                <img src="{{ $autoridad->image }}" id="preViewImage"
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
                                        <div class="col-lg-6 mt-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="cargo">Cargo </label>
                                                        <input type="text" id="cargo" name="cargo"
                                                            value="{{ old('cargo', $autoridad->cargo) }}"
                                                            class="form-control datepicker"
                                                            placeholder="Cargo de la persona">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-3">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="cargo">Nivel de titulo </label>
                                                                <input type="text" id="nivel_titulo" name="nivel_titulo"
                                                                    value="{{ old('nivel_titulo', $autoridad->nivel_titulo) }}"
                                                                    class="form-control datepicker"
                                                                    placeholder="Nivel de titulo universitario">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-lg-12 mt-3">
                                            <div class="row justify-content-center">
                                                <div class="form-group">
                                                    <a href="{{ route('admin-autoridad.index') }}" id="btnCancel"
                                                        class="btn btn-danger mr-2" data-dismiss=""><i
                                                            class="material-icons">cancel</i>Cancelar</a>
                                                    <button type="submit" class="btn btn-primary ">
                                                        <div class="load" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                        <i class="material-icons icon-load">done</i> <span
                                                            class="btnTextSubmit">Guardar
                                                            Autoridad</span>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select-person').select2({
                placeholder: 'Selecccione una persona'
            });
            $('#select-person').on('change', function(e) {
                let persona = JSON.parse('<?php echo json_encode($data['personas']); ?>');
                persona = persona.filter((data) => $(this).val() == data.id_persona)[0];
                $('#id_persona').val(persona.id_persona);

            });
        });
    </script>
@endsection
