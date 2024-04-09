@extends('frontend.app')
@section('content')
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Fotos de nuestro Centro</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>
                        Galeria
                    </li>
                    {{-- <li>
                        Gallery
                    </li> --}}
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Gallery Section Starts Here========== -->
    <div class="gallery-section padding-top padding-bottom pos-rel">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="container">
            <div class="masonary-wrapper">
                @if ($data['galeria']->total() == 0)
                    <h2 class="text-center text-secondary">No hay imágenes</h2>
                @endif
                @foreach ($data['galeria'] as $item)
                    <div class="masonary-item">
                        <div class="masonary-thumb">
                            <a href="{{ $item->image }}" class="img-pop"><i class="fas fa-expand"></i></a>
                            <img src="{{ $item->image }}" alt="gallery">
                            <a href="javascript:void(0)" onclick="detailImage({{ $item->id_galeria }})"
                                style="top: 11%;left: 10%;"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                @endforeach
                <div class="modal fade" id="modal-image" tabindex="-1" aria-labelledby="modal-image" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titulo"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card">
                                    <img id='image' src="" class="card-img-top " alt="">
                                    <div class="card-body">
                                        <h6 class="card-title" id="fecha_creacion">
                                        </h6>
                                        <p class="card-text" id="descripcion"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            $paginate = $data['galeria'];
        @endphp
        @if (!$data['galeria']->total() == 0)
            <ul class="default-pagination">
                @if ($paginate->onFirstPage())
                    <li class="disabled">
                        <a href="#"><i class="fas fa-angle-left"></i></a>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginate->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
                    </li>
                @endif

                @foreach ($paginate->getUrlRange(1, $paginate->lastPage()) as $page => $url)
                    <li>
                        <a href="{{ $url }}"
                            class="{{ $paginate->currentPage() == $page ? 'active' : '' }}">{{ $page }}</a>
                    </li>
                @endforeach

                @if ($paginate->hasMorePages())
                    <li>
                        <a href="{{ $paginate->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                    </li>
                @else
                    <li class="disabled">
                        <a href="#"><i class="fas fa-angle-right"></i></a>
                    </li>
                @endif
            </ul>
        @endif

    </div>
    <script>
        function detailImage(item) {
            $('#modal-image').modal('show');
            let galeria = JSON.parse('<?php echo json_encode($data['galeria']); ?>');

            console.log(galeria);
            galeria = galeria.data.filter((data) => item == data.id_galeria)[0];
            $('#titulo').text(galeria.titulo);
            $('#fecha_creacion').text(formatFecha(galeria.fecha_creacion));
            $('#descripcion').html(galeria.descripcion);
            $('#image').attr('src', galeria.image);
            $('#image').attr('alt', galeria.titulo);
        };

        function formatFecha(inputDate) {
            const monthNames = ["enero", "febrero", "marzo", "abril", "mayo", "junio",
                "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
            ];
            const [year, month, day] = inputDate.split('-').map(Number);
            const monthName = monthNames[month - 1];
            const formattedDate = `${day} ${monthName}, ${year}`;
            return formattedDate;
        }
    </script>
@endsection
