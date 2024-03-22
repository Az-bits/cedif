@extends('backend.app')
@section('content')
    <script>
        function readEnlace(id, url) {
            -
            const videoId = new URL(url).searchParams.get('v');
            const urlIframe = `https://www.youtube.com/embed/${videoId}`;
            $(`#video-${id}`)[0].src = urlIframe;
        }
    </script>
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
                            <i class="material-icons">play_circle</i>
                        </div>
                        <h4 class="card-title">Videos</h4>
                    </div>
                    <a href="{{ route('admin-videos.create') }}" class="btn btn-primary btn-sm mt-2">
                        <i class="material-icons">add</i> Nuevo video
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
                                    {{-- <th>Video</th> --}}
                                    <th>Enlace</th>
                                    <th>Titulo</th>
                                    <th>Fecha Creacion</th>
                                    <th class="disabled-sorting text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['videos'] as $item)
                                    <tr>
                                        <td>{{ $item->id_video }}</td>
                                        <td>
                                            @php
                                                $url = 'https://www.youtube.com/watch?v=2J4Cfro6CJU';
                                                $parts = parse_url($item->enlace);
                                                parse_str($parts['query'], $query);
                                                $keyVideo = $query['v'];
                                            @endphp
                                            <iframe class='az-iframe-video' style="width: 250px; height:200px;"
                                                src="https://www.youtube.com/embed/{{ $keyVideo }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </td>
                                        <script>
                                            readEnlace({{ $item->id_video }}, {{ $item->enlace }})
                                        </script>
                                        <td>{{ $item->titulo }}</td>
                                        <td>{{ $item->fecha_creacion }}</td>
                                        <td>
                                            <a href="{{ route('admin-videos.edit', $item) }}"
                                                class="btn btn-link btn-info btn-just-icon editar" data-toggle="tooltip"
                                                title="Editar"><i class="material-icons">edit</i></a>
                                            <form id="eliminarForm-{{ $item->id_video }}"
                                                action="{{ route('admin-videos.destroy', $item) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button"
                                                    onclick="confirmarEliminacion('{{ $item->id_video }}')"
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
                                    {{-- <th>Video</th> --}}
                                    <th>Enlace</th>
                                    <th>Titulo</th>
                                    <th>Fecha Creacion</th>
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
@endsection
