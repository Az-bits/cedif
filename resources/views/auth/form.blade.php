<form id="formulario_modal" method="post" action="{{ route('admin-publicacion.store') }}">
    @csrf
    <div class="row d-flex container">
        <input type="hidden" id="id_publicacion" name="id_publicacion">
        <input type="hidden" id="id_multimedia" name="id_multimedia">

        <h4>1. Datos publicación</h4>
        <div class="col-md-12 mt-2" id="person">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="tipo">Tipo de publicación <span class="az-r">( * )</span></label>
                        <select class="selectpicker" data-style="btn btn-primary btn-round" data- title="Seleccione"
                            name="id_tipo_publicacion" id="tipo">
                        </select>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group fl">
                        <label for="image">Imagen</label>
                        <div class="row d-flex justify-content-center" style="width: 100%;">
                            <div class="col-md-12 text-center">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-raised">
                                        <!-- <img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" rel="nofollow" alt="..."> -->
                                        <img src="https://glouton.b-cdn.net/site/images/no-image-wide.png"
                                            id="preViewImage" rel="nofollow" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-rose btn-file">
                                            <span class="fileinput-new">Seleccione</span>
                                            <span class="fileinput-exists">Seleccionar</span>
                                            <input type="file" name='imagen'
                                                accept="image/jpg,image/png,image/jpeg" />
                                        </span>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput">
                                            <i class="fa fa-times"></i> Remover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-2">
                    <div class="form-group">
                        <label for="detalle">Detalle </label>
                        <textarea name="detalle" id="detalle" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="f_i">Fecha Ini</label>
                        <input type="text" id="f_i" name="fecha_inicio" class="form-control datepicker"
                            placeholder="mm-dd-aaaa">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="f_f">Fecha Fin</label>
                        <input type="text" id="f_f" name="fecha_fin" class="form-control datepicker"
                            placeholder="mm-dd-aaaa">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="f_f">Visibilidad</label>
                        <div class="form-check">
                            <div class="form-group">
                                <label class="form-check-label">
                                    Publicar <input name="visibilidad" class="form-check-input" type="checkbox"
                                        value="1">
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
                            <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><i
                                    class="material-icons ">close</i>cancelar</button>
                            <button type="submit" class="btn btn-primary ">
                                <div class="load" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <i class="material-icons icon-load">done</i> <span class="btnTextSubmit">Guardar
                                    publicación</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
