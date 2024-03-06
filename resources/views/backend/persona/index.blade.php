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
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Personas</h4>
                    </div>
                    <a href="{{ route('admin-persona.create') }}" class="btn btn-primary btn-sm mt-1">
                        <i class="material-icons">add</i> Nuevo formulario
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
                                    <th>celular</th>
                                    <th>correo</th>
                                    <th class="disabled-sorting text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['personas'] as $item)
                                    <tr>
                                        <td>{{ $item->id_persona }}</td>
                                        <td>{{ $item->ci }}</td>
                                        <td>{{ $item->nombre . ' ' . $item->paterno . ' ' . $item->materno }}</td>
                                        <td>{{ $item->celular }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ route('admin-persona.edit', $item) }}"
                                                class="btn btn-link btn-info btn-just-icon editar" data-toggle="tooltip"
                                                title="Editar"><i class="material-icons">edit</i></a>
                                            <form id="eliminarForm-{{ $item->id_persona }}"
                                                action="{{ route('admin-persona.destroy', $item) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button"
                                                    onclick="confirmarEliminacion('{{ $item->id_persona }}')"
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
                                    <th class="disabled-sorting text-right">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('backend.publicacion.modal') --}}
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable({
                language: {
                    search: '_INPUT_',
                    searchPlaceholder: 'Buscar',
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                lengthMenu: [
                    [5, 25, 50, -1],
                    [10, 25, 50, 'Todos'],
                ],
            });
        });
        // Función para mostrar el mensaje de confirmación
        function confirmarEliminacion(id) {
            swal({
                title: '¿Está seguro de eliminar?',
                text: '¡No podrá recuperar los datos!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: "Eliminar",
                cancelButtonText: "No, retornar",
                confirmButtonClass: "btn btn-danger",
                cancelButtonClass: "btn btn-default",
                buttonsStyling: false
            }).then(function() {
                // Si el usuario confirma, enviar el formulario de eliminación
                document.getElementById('eliminarForm-' + id).submit();
            }, function(dismiss) {
                dismiss === 'cancel' ? swal.noop : null;
            });
        }
    </script>
@endsection
