@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Navigation Pills Icons -
                            <small class="description">Vertical Tabs</small>
                        </h4>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-2 col-md-6">
                                <!--
                                                                              color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                                                          -->
                                <ul class="nav nav-pills nav-pills-rose nav-pills-icons flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#link110" role="tablist">
                                            <i class="material-icons">dashboard</i> Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#link111" role="tablist">
                                            <i class="material-icons">schedule</i> Settings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="link110">
                                        Collaboratively administrate empowered markets via plug-and-play networks.
                                        Dynamically procrastinate B2C users after installed base benefits.
                                        <br>
                                        <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                                        Collaboratively administrate empowered markets via plug-and-play networks.
                                        Dynamically procrastinate B2C users after installed base benefits.
                                        <br />
                                        <br /> Dramatically visualize customer directed convergence without revolutionary
                                        ROI. Collaboratively administrate empowered markets via plug-and-play networks.
                                        Dynamically procrastinate B2C users after installed base benefits.
                                    </div>
                                    <div class="tab-pane" id="link111">
                                        Efficiently unleash cross-media information without cross-media value. Quickly
                                        maximize timely deliverables for real-time schemas.
                                        <br>
                                        <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon d-flex justify-content-between">
                        <div class="w-100">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">Publicaciones</h4>
                        </div>
                        <button id="nuevo" type="button" class="btn btn-primary btn-sm mt-1" data-toggle="modal"
                            data-target="#main_modal">
                            <i class="material-icons">add</i> Nuevo formulario
                        </button>
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
                                        <th>Publicación</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Fin</th>
                                        <th>Visibilidad</th>
                                        <th class="disabled-sorting text-right">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Imagen</th>
                                        <th>Publicación</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Fin</th>
                                        <th>Visibilidad</th>
                                        <th class="disabled-sorting text-right">Acciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
