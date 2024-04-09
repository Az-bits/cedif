@extends('backend.app')
@section('content')
    <div class="row">
        @if (Session::get('success'))
            <div class="col-md-12">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>
                        <b> ÉXITO - </b> {{ Session::get('success') }}</span>
                </div>
            </div>
        @endif

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon d-flex justify-content-between">
                    <div class="w-100">
                        <div class="card-icon">
                            <i class="material-icons">photo</i>
                        </div>
                        <h4 class="card-title">Imagenes en galeria</h4>
                    </div>
                    <a href="{{ route('admin-galerias.create') }}" class="btn btn-primary btn-sm mt-2">
                        <i class="material-icons">add</i> Nueva imagen
                    </a>

                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>

                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="min-w-25">#</th>
                                    <th>Imagen</th>
                                    <th>Titulo</th>
                                    <th>Fecha</th>
                                    <th class="disabled-sorting text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['galeria'] as $item)
                                    <tr>
                                        <td>{{ $item->id_galeria }}</td>
                                        <td class='text-center'><img src="{{ $item->image }}" alt="{{ $item->titulo }}"
                                                width='50' height="50" /></td>
                                        <td>{{ $item->titulo }}</td>
                                        <td>{{ $item->fecha_creacion }}</td>`
                                        <td>
                                            <a href="{{ route('admin-galerias.edit', $item) }}"
                                                class="btn btn-link btn-info btn-just-icon editar" data-toggle="tooltip"
                                                title="Editar"><i class="material-icons">edit</i></a>
                                            <form id="eliminarForm-{{ $item->id_galeria }}"
                                                action="{{ route('admin-galerias.destroy', $item) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button"
                                                    onclick="confirmarEliminacion('{{ $item->id_galeria }}')"
                                                    class="btn btn-link btn-danger btn-just-icon eliminar"
                                                    data-toggle="tooltip" title="Eliminar">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Imagen</th>
                                    <th>Titulo</th>
                                    <th>Fecha</th>
                                    <th class="disabled-sorting text-right">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
