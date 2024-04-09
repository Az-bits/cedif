<!-- <= form_open(current_url()); ?> -->
@extends('backend.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- @php
        if (isset($data['persona'])) {
            $persona = $data['persona'];
            $action = route('admin-persona.update', $persona);
        } else {
            $persona = null;
            $action = route('admin-persona.store');
        }
    @endphp --}}
    @php
        // dd($data['personas'];
        // dd($errors);
    @endphp
    <div class="container-fluid" style="max-width: 50rem;">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">group</i>
                        </div>
                        <h4 class="card-title">Nuevo usuario</h4>
                    </div>
                    <div class="card-body ">
                        <form id="formulario_modal" method="post" action="{{ route('usuarios.store') }}">
                            @csrf
                            <div class="row d-flex m-2">
                                <input type="hidden" id="id_persona" name="id_persona" value="{{ old('id_persona') }}">
                                <div class="col-md-12">
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
                                <div class="col-lg-12 mt-2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="ci" class="text-dark">Persona</label>
                                            <br>
                                            <select id='select-person' class="" name="persona"
                                                data-style="btn btn-primary btn-round">
                                                <option></option>
                                                @foreach ($data['personas'] as $item)
                                                    <option value="{{ $item->id_persona }}">
                                                        {{ $item->ci . '.:' . $item->nombre . ' ' . $item->paterno . ' ' . $item->materno }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">

                                        <div class="col-lg-12">
                                            <label for="nombreCompleto" class='text-dark'>Nombre completo</label>
                                            <input type="text" id="nombreCompleto" name="nombreCompleto"
                                                class="form-control" value="{{ old('nombreCompleto') }}" disabled>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="email" class='text-dark'>Correo</label>
                                            <input type="text" id="email" name="email" class="form-control"
                                                value="{{ old('email') }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <label for="password" class='text-dark'>Contraseña</label>
                                            <input type="text" id="password" name="password" class="form-control"
                                                value="{{ old('password') }}">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="pconf" class='text-dark'>Repita la contraseña</label>
                                            <input type="text" id="pconf" name="password_confirmation"
                                                class="form-control" value="{{ old('password_confirmation') }}">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="rol" class='text-dark'>Rol</label>
                                            <div class="d-flex">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input id='rol' class="form-check-input" type="radio"
                                                            name="rol" value="1"> ADMINISTRADOR
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input id='rol' class="form-check-input" type="radio"
                                                            name="rol" value="2"> USUARIO
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="pconf" class='text-dark'>Estado</label>
                                            <div class="d-flex">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input id='estado' class="form-check-input" type="radio"
                                                            name="estado" value="1"> ACTIVO
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input id='estado' class="form-check-input" type="radio"
                                                            name="estado" value="2"> INACTIVO
                                                        <span class="circle">
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
                                        <a href="{{ route('usuarios.index') }}" id="btnCancel"
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select-person').select2({
                placeholder: 'Selecccione una persona'
            });
            $('#select-person').on('change', function(e) {
                let persona = JSON.parse('<?php echo json_encode($data['personas']); ?>');
                persona = persona.filter((data) => $(this).val() == data.id_persona)[0];
                $('#nombreCompleto').val(persona.nombre + ' ' + persona.paterno + ' ' + persona.materno);
                $('#email').prop('disabled', false);
                $('#email').val(persona.email);
                $('#id_persona').val(persona.id_persona);
            });
        });
    </script>
@endsection
