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
        {{-- @php
            dd($data['personas']);
        @endphp --}}

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon d-flex justify-content-between">
                    <div class="w-100">
                        <div class="card-icon">
                            <i class="material-icons">chat</i>
                        </div>
                        <h4 class="card-title">Contactos</h4>
                    </div>
                    <a href="{{ route('admin-contacto.create') }}" class="btn btn-primary btn-sm mt-1">
                        <i class="material-icons">add</i> Nueva solicitud
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
                                    <th>CI</th>
                                    <th>Nombre</th>
                                    <th>Celular</th>
                                    <th>Correo</th>
                                    <th>Estado</th>
                                    <th class="disabled-sorting text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['contacto'] as $item)
                                    <tr>
                                        <td>{{ $item->id_contacto }}</td>
                                        <td>{{ $item->ci }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->celular }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @if ($item->estado == '2')
                                                <span class="text-success az-b">ATENDIDO</span>
                                            @else
                                                <span class="text-warning az-b">NO ATENDIDO</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin-contacto.edit', $item) }}"
                                                class="btn btn-link btn-info btn-just-icon editar" data-toggle="tooltip"
                                                title="Ver solicitud"><i class="material-icons">visibility</i></a>
                                            <form id="eliminarForm-{{ $item->id_contacto }}"
                                                action="{{ route('admin-contacto.destroy', $item) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button"
                                                    onclick="confirmarEliminacion('{{ $item->id_contacto }}')"
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
                                    <th>CI</th>
                                    <th>Nombre</th>
                                    <th>celular</th>
                                    <th>correo</th>
                                    <th>Estado</th>
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
