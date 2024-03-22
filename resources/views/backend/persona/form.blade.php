<!-- <= form_open(current_url()); ?> -->
@extends('backend.app')
@section('content')
    @php
        if (isset($data['persona'])) {
            $persona = $data['persona'];
            $action = route('admin-persona.update', $persona);
        } else {
            $persona = null;
            $action = route('admin-persona.store');
        }
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
                        <h4 class="card-title">Nueva Persona</h4>
                    </div>
                    <div class="card-body ">
                        <form id="formulario_modal" method="post" action="{{ route('admin-persona.store') }}">
                            @csrf
                            <div class="row d-flex m-2">
                                <input type="hidden" id="id_persona" name="id_persona">
                                <div class="col-12 mt-2">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group fl">
                                                <label for="ci">Cedula de Identidad</label>
                                                <input type="text" class="form-control input-reset" id="ci"
                                                    name="ci" placeholder="Cedula Identidad"
                                                    value="{{ old('ci') }}">
                                                <small class="text-danger" id="message"></small>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre">Nombres</label>
                                                <input type="text" id="nombre" name="nombre" class="form-control"
                                                    value="{{ old('nombre') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="paterno">Paterno</label>
                                                <input type="text" id="paterno" name="paterno" class="form-control"
                                                    value="{{ old('paterno') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="materno">Materno</label>
                                                <input type="text" id="materno" name="materno" class="form-control"
                                                    value="{{ old('materno') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="expedido">Expedido</label>
                                                <select class="selectpicker" data-style="btn btn-primary btn-round"
                                                    data-title="Seleccione" name="expedido" id="expedido">
                                                    <option {{ old('expedido') == 'LP' ? 'selected' : '' }} value="LP">
                                                        La Paz</option>
                                                    <option {{ old('expedido') == 'CBBA' ? 'selected' : '' }}
                                                        value="CBBA">Cochabamba</option>
                                                    <option {{ old('expedido') == 'SC' ? 'selected' : '' }} value="SC">
                                                        Santa Cruz</option>
                                                    <option {{ old('expedido') == 'OR' ? 'selected' : '' }} value="OR">
                                                        Oruro</option>
                                                    <option {{ old('expedido') == 'PT' ? 'selected' : '' }} value="PT">
                                                        Potosí</option>
                                                    <option {{ old('expedido') == 'CH' ? 'selected' : '' }} value="CH">
                                                        Chuquisaca</option>
                                                    <option {{ old('expedido') == 'TJ' ? 'selected' : '' }} value="TJ">
                                                        Tarija</option>
                                                    <option {{ old('expedido') == 'PA' ? 'selected' : '' }} value="PA">
                                                        Pando</option>
                                                    <option {{ old('expedido') == 'BN' ? 'selected' : '' }} value="BN">
                                                        Beni</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="fecha_nac">Fecha de Nacimiento</label>
                                                <input type="date" id="fecha_nac" name="fecha_nac"
                                                    class="form-control datepicker" placeholder="mm-dd-aaaa"
                                                    value="{{ old('fecha_nac') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="celular">celular</label>
                                                <input type="number" id="celular" name="celular" class="form-control"
                                                    value="{{ old('celular') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email">Correo</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder="correo" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="row justify-content-center">
                                        <div class="form-group">
                                            <a href="{{ route('admin-persona.index') }}" id="btnCancel"
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
{{-- <script>
    var ci = $("#ci")
    var ci2 = $("#ci2")
    ci.autocomplete({
        serviceUrl: '<= base_url(Hasher::make(30)) ?>',
        paramName: 'buscarString',
        transformResult: function(response) {
            var res = JSON.parse(response);
            return {
                suggestions: $.map(res, function(r) {
                    return {
                        value: r.ci + ' ' + r.nombreCompleto,
                        idpersona: r.id,
                        ci: r.ci,
                        nombreCompleto: r.nombreCompleto,
                        celular: r.celular,
                        email: r.email

                    };
                })
            };
        },
        minChars: 1,
        onSearchStart: function() {
            $('#person :input').each(function() {
                let name = $(this).attr('name');
                name !== 'ci' && limpiar(this);
            });
            $('#nombreCompleto').prop('disabled', true);
        },
        onSearchComplete: function(e) {
            $('#message').html() === "" ? $('#message').html('Persona no encontrada.') : "";
        },
        onSelect: function(r) {
            $('#message').html('')
            $('form#formulario_modal #person :input').each(function() {
                let name = $(this).attr('name');
                if (r[name]) {
                    $(this).val(r[name]);
                }
            });
            $('#nombreCompleto').prop('disabled', true);
        }

    });
    ci2.autocomplete({
        serviceUrl: '<= base_url(Hasher::make(30)) ?>',
        paramName: 'buscarString',
        transformResult: function(response) {
            var res = JSON.parse(response);
            return {
                suggestions: $.map(res, function(r) {
                    return {
                        value: r.ci + ' ' + r.nombreCompleto,
                        idpersona2: r.id,
                        ci2: r.ci,
                        nombreCompleto2: r.nombreCompleto,
                        celular2: r.celular,
                        email2: r.email
                    };
                })
            };
        },
        minChars: 1,
        onSearchStart: function() {
            $('#person2 :input').each(function() {
                let name = $(this).attr('name');
                name !== 'ci2' && limpiar(this);
            });
            $('#nombreCompleto2').prop('disabled', true);
        },
        onSearchComplete: function(e) {
            $('#message2').html() === "" ? $('#message2').html('Persona no encontrada.') : "";
        },
        onSelect: function(r) {
            $('#message2').html('')
            $('form#formulario_modal #person2 :input').each(function() {
                let name = $(this).attr('name');
                if (r[name]) {
                    $(this).val(r[name]);
                }
                name !== 'ci2' && name !== 'idpersona2' && $(this).prop('disabled', true);
            });

        }
    });


    ci2.on("keyup", function() {
        ci2.val().length < 5 && $('#message2').html('')
    });
    ci.on("keyup", function() {
        ci.val().length < 5 && $('#message').html('')
    });

    function limpiar(item) {
        $(item).val('');
    }
</script> --}}
