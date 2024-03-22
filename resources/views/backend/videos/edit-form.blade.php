@extends('backend.app')
@section('content')
    @php
        $video = $data['video'];
    @endphp
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">play_circle</i>
                        </div>
                        <h4 class="card-title">Editar Video</h4>
                    </div>
                    <div class="card-body ">
                        <form id="formulario_modal" method="post" action="{{ route('admin-videos.update', $video) }}"
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
                                <div class="col-md-12 mt-2" id="person">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="titulo">Video </label>
                                                <div id='image-video'>
                                                    <img class='az-image-video' src="{{ asset('images/video.png') }}"
                                                        alt="" data-toggle="tooltip"
                                                        title="Ingrese un Enlace de video">
                                                </div>
                                                <div id='iframe-video' style='display: none'>
                                                    <iframe class='az-iframe-video' id="iframe-id"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-2">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="titulo">Título </label>
                                                        <input type="text" id="titulo" name="titulo"
                                                            class="form-control" placeholder="Titulo del video"
                                                            value="{{ old('titulo', $video->titulo) }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-2">
                                                    <div class="form-group">
                                                        <label for="descripcion">Descripción </label>
                                                        <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control">{{ old('descripcion', $video->descripcion) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-2">
                                                    <div class="form-group">
                                                        <label for="enlace">Enlace del video </label>
                                                        <input type="text" id="enlace" name="enlace"
                                                            class="form-control"
                                                            placeholder="https://www.youtube.com/watch?v="
                                                            value="{{ old('enlace', $video->enlace) }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-lg-12 mt-3">
                                                <div class="row justify-content-center">
                                                    <div class="form-group">
                                                        <a href="{{ route('admin-videos.index') }}" id="btnCancel"
                                                            class="btn btn-danger mr-2" data-dismiss=""><i
                                                                class="material-icons">cancel</i>Cancelar</a>
                                                        <button type="submit" class="btn btn-primary ">
                                                            <div class="load" role="status">
                                                                <span class="sr-only">Loading...</span>
                                                            </div>
                                                            <i class="material-icons icon-load">done</i> <span
                                                                class="btnTextSubmit">Guardar
                                                                video</span>
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
        const urlInput = $('#enlace')[0];

        readEnlace(urlInput);

        urlInput.addEventListener('change', () => {
            readEnlace(urlInput);
        });

        function readEnlace(urlInput) {
            const url = urlInput.value.trim();
            // Basic validation (can be extended for additional checks)
            if (!url.startsWith('https://www.youtube.com/watch?v=')) {
                $('#image-video').show();
                $('#iframe-video').hide();
                alert('Error al ingresa el enlace!, vuelva a intentarlo.');
                return;
            }
            // Extract video ID
            const videoId = new URL(url).searchParams.get('v');
            // Create iframe with security considerations (avoiding unnecessary attributes)
            const iframe = $('#iframe-id')[0];
            iframe.src = `https://www.youtube.com/embed/${videoId}`;
            $('#image-video').hide();
            $('#iframe-video').show();
            // videoContainer.innerHTML = '';
            // videoContainer.appendChild(iframe);
        }
    </script>
@endsection
